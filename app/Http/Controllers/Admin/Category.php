<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Category extends Controller
{
    public function index(){
        return view('admin.pages.category');
    }
}
