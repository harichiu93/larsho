<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\MyHelpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CategoryModel;
use App\Http\Middleware\CheckAdmin;


class Category extends Controller
{

    public function __construct()
    {

    }

    public function index(){
        $category = CategoryModel::all();
        return view('admin.pages.category.list' , ['category' => $category]);
    }

    public function add(Request $request){
        $input = $request->all();

        $CatCon = new CategoryModel();
        $CatCon->name = $input['cat_name'];
        if($input['slug'] == "" || empty($input['slug'])){
            $slug = MyHelpers::toSlug($input['cat_name']);
        }else{
            $slug = $input['slug'];
        }
        $CatCon->slug = $slug;
        $CatCon->description = $input['description'];
        $CatCon->save();
        return redirect()->route('listCategory');
    }

    public function edit(Request $request){
        $rule = [
            'cat_name' => 'required'
        ];


        $input = $request->all();
        $category = CategoryModel::findOrFail($input['cat_id']);
        $category->name = $input['cat_name'];
        $category->slug = $input['slug'];
        $category->description = $input['description'];
        $category->save();
        return redirect()->route('listCategory');
    }


    public function delete($id){
        CategoryModel::destroy($id);
        return redirect(url()->previous());
    }



}
