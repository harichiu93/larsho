<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }

    public function showFormProfile(){
        return view('user.pages.profile' , ['title' => 'Thay đổi thông tin' , 'user' => DB::table('users')->where('user_id' , Auth::user()->user_id)->first()]);
    }

    public function updateProfile(Request $request){
        $validate = Validator::make($request->all() , ['name' => 'max:255' ,'city' => 'max:255', 'nation' => 'max:255' , 'address' => 'max:255' , 'phone' => 'digits_between:9,12']);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'nation' => $request->nation
        ];
        DB::table('users')->where('user_id' , Auth::user()->user_id)->update($data);
        return redirect()->back()->with('success' , 'Thay đổi thông tin thành công.');

    }




    public function showFormChangePassword(){
        return view('user.auth.changePassword' , ['title' => 'Thay đổi mật khẩu']);
    }

    public function changePassword(Request $request){
        $rule = [
            'password' => 'required|min:6|confirmed'
        ];

        $mess = [
            'password.confirmed' => 'Mật khẩu không khớp.',
            'password.min' => 'Mật khẩu của bạn quá ngắn. Vui lòng nhập hơn 6 kí tự.',
        ];

        $validate = Validator::make($request->all() , $rule , $mess);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }
        if(Hash::check($request->old_password , DB::table('users')->where('user_id' , Auth::user()->user_id)->value('password'))){
//            Session::flash('success' , 'Thay đổi mật khẩu thành công');
            return redirect()->back()->with('success' , 'Thay đổi mật khẩu thành công');
        }else{
            return redirect()->back()->withErrors('fail');
        }


    }
}
