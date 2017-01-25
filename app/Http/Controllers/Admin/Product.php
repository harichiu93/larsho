<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Product extends Controller
{
    public function index(){
        return 1;
    }

    public function showFormAdd(){
        return view('admin.pages.product.add');
    }

    public function add(Request $request){

    }


}
