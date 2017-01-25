<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Home extends Controller
{
    //
    public function __construct()
    {
//        $this->middleware('CheckAdmin');
    }

    public function index(){
        return view('admin.pages.home');
    }

    public function login(){
        return view('login');
    }
}
