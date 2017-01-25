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






//Route site

Route::get('/' , function (){
    return redirect()->route('home');
});

Route::get('home' , 'HomeController@index')->name('home');

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









//Area customer
Route::group(['prefix' => 'user'] , function (){
    //Area customer information
    Route::get('profile' , 'UserController@showFormProfile');
    Route::post('profile' , 'UserController@updateProfile');
    // End area customer information



    //Area Login and logout
    Route::get('login' , function (){return view('user.auth.login')->with(['title' => 'Đăng nhập']);})->middleware('is_login');
    Route::post('login' , 'Auth\LoginController@login');

    Route::get('logout' , 'Auth\LoginController@logout');
    //End area login

    //Area register
    Route::get('register' , function (){
        if(Auth::check()){ return redirect('user/profile');}
        return view('user.auth.register')->with(['title' => 'Đăng ký']);
    });
    Route::post('register' , 'Auth\RegisterController@register');
    //End area register

    //Area show succsess
    Route::get('success' , function (){
        return view('login.success')->with(['title' => 'Thành công']);
    });
    // End area show success

    //Area reset,change password
    Route::get('password/reset'         , function (){return view('user.auth.reset' , ['title' => 'Lấy lại mật khẩu']);});
    Route::post('password/email'        , 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset/{token}' , 'Auth\ResetPasswordController@showResetForm');
    Route::post('password/reset'        , 'Auth\ResetPasswordController@reset');
    //change password
    Route::get('password/change' , 'UserController@showFormChangePassword');
    Route::post('password/change' , 'UserController@changePassword');
    //End area reset,change password
});
//End area customer


//Route Admin
Route::group(['prefix' => 'admin' , 'middleware' => 'is_admin', 'namespace' => 'Admin'], function (){
    Route::get('index' , function(){
        return view('admin.pages.home');
    })->name('adminHome');

//    Route::get('login' , 'Home@login');

    //Route category
    Route::group(['prefix' => 'category'] , function (){

       Route::get('index' , 'Category@index')->name('listCategory');

       Route::post('add' , 'Category@add');

       Route::get('add' , function(){
           return view('admin.pages.category.add');
       })->name('addCategory');

       Route::get('edit/{id}' , function ($id){
           $category = App\CategoryModel::findOrFail($id);
           return view('admin.pages.category.edit' , ['category' => $category]);
       })->where(['id' => '[0-9]+'])->name('catEdit');

       Route::post('edit' , 'Category@edit');

       Route::get('delete/{id}' , 'Category@delete')->where(['id' => '[0-9]+'])->name('catDel');

    });
    //End Route Category


    //Route product
    Route::group(['prefix' => 'product'] , function (){
       Route::get('list' , 'Product@index')->name('listProduct');
       Route::get('add' , 'Product@showFormAdd')->name('addProduct');
    });

    // End route product


});
//End Route Admin


