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

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/',function(){
	return view('index');
});
Route::get('categories',function(){
	return view('categories');
});
Route::get('singal',function(){
	return view('singal');
});
Route::get('cart',function(){
	return view('cart');
});
Route::get('checkout',function(){
	return view('checkout');
});
Route::get('login',function(){
	return view('login');
});
Route::get('contact',function(){
	return view('contact');
});

//Admin Routes
Route::get('admin', function (){
    return view('admin/index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
