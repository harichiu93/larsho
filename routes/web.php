<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

//Route::get('home' , 'Home@index')->name('trangchu');



//Route site

Route::get('/' , function (){
   return view('site.pages.category');
});

Route::get('category/{cat}' , function($cat){
    return view('site.pages.category');
})->where(['cat' => '[0-9]+']);

Route::get('product/{id}/' , function ($id){
    return view('site.pages.product');
})->where(['id' => '[0-9]+']);

Route::get('cart' , function (){
    return view('site.pages.cart');
})->name('giohang');

Route::get('checkout' , function (){
    return view('site.pages.checkout');
});

Route::get('login' , function (){
    return view('login')->with(['title' => 'Login']);
});

Route::post('login' , 'User@login');

//Auth::routes();
//
//Route::get('/home', 'HomeController@index');


//Route Admin
Route::group(['prefix' => 'admin' , 'namespace' => 'Admin'], function (){
    Route::get('index' , 'Home@index');

    Route::get('login' , 'Home@login');

    //Route category
    Route::group(['prefix' => 'category'] , function (){
       Route::get('list' , 'Category@list');
       Route::get('add' , 'Category@add');
       Route::post('add' , 'Category@doAdd');
       Route::get('edit/{id}' , 'Category@edit')->where(['id' => '[0-9]+']);
       Route::post('edit' , 'Category@doEdit');
       Route::get('delete/{id}' , 'Category@delete')->where(['id' => '[0-9]+']);
    });
    //End Route Category


});
//End Route Admin
