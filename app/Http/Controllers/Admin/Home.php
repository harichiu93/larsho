<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Home extends Controller
{
    //

    public function index($name){
        return view('admin.pages.home');
    }

    public function login(){
        return view('login');
    }
}
