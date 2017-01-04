<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class User extends Controller
{
    public function login(Request $request){
        $this->middleware('csrf');
        if($request->input('username') == 'a' && $request->input('password') == 'a'){
            echo 'ok';
        }
    }
}
