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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('admin', 'LoginController@loginForm');
Route::get('dashboard','AdminController@dashboard');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('user',function(){
	return view('user/userlist');
});
Route::get('newuser',function(){

	return view('user/new');
});
Route::get('adduser','UserController@save');
Auth::routes();
Route::get('/admin',function(){
	return view('admin_template');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/store','HomeController@store');
Route::get('/show','HomeController@show');
Route::get('/create','HomeController@create');
Route::resource('home','HomeController');


