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
//Route::get('home/register', function () {
//    return view('home.register');
//});
Route::get('home/login', function () {
    return view('home.login');
});
Route::get('home/homepage', function () {
    return view('home.homepage');
});
Route::any('home/special', function () {
    return view('home.special');
});
Route::any('user/goregister','Home\UserRegController@GoRegister');
Route::post('user/reg','Home\UserRegController@Check');
Route::any('/getcode','Home\UserRegController@GetCode');
Route::any('user/gologin','Home\LoginController@GoLogin');
Route::post('user/login','Home\LoginController@DoLogin');
Route::any('user/logout','Home\LoginController@Logout');
Route::any('user/gopersonal','Home\PersonInfoController@GoPersonal');
Route::any('user/head','Home\PersonInfoController@GetHead');
Route::any('user/personinfo','Home\PersonInfoController@PersonInfo');
Route::any('user/setpass','Home\PersonInfoController@SetPass');
Route::any('user/special','Home\SpecialController@ToSpecial');
Route::any('user/create','Home\SpecialController@Create');
Route::any('user/delspecial/{id}','Home\SpecialController@Delete');




//Auth::routes();

//Route::get('/home', 'HomeController@index');
