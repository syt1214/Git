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
Route::get('home/register', function () {
    return view('home.register');
});
Route::get('home/login', function () {
    return view('home.login');
});
Route::any('user/reg','Home\UserRegController@Check');
Route::any('user/login','Home\LoginController@DoLogin');
Route::any('/getcode','Home\UserRegController@GetCode');

