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
//去注册
Route::any('user/goregister','Home\UserRegController@GoRegister');
//处理注册
Route::post('user/reg','Home\UserRegController@Check');
//获取验证码
Route::any('/getcode','Home\UserRegController@GetCode');
//返回登录页面
Route::any('user/gologin','Home\LoginController@GoLogin');
//处理登录信息
Route::post('user/login','Home\LoginController@DoLogin');
//退出
Route::any('user/logout','Home\LoginController@Logout');
//返回个人信息页面
Route::any('user/gopersonal','Home\PersonInfoController@GoPersonal');
//得到个人头像
Route::any('user/head','Home\PersonInfoController@GetHead');
//添加或者修改个人的信息
Route::any('user/personinfo','Home\PersonInfoController@PersonInfo');
//修改密码
Route::any('user/setpass','Home\PersonInfoController@SetPass');
//返回个人专辑页
Route::any('user/special','Home\SpecialController@ToSpecial');
//创建个人专辑
Route::any('user/create','Home\SpecialController@Create');
//专辑的id，删除整个专辑
Route::any('user/delspecial/{id}','Home\SpecialController@Delete');
//编辑整个专辑，专辑的id
Route::any('user/editspecial/{id}','Home\SpecialController@Edit');
//专辑的id，显示单个专辑里面的所有相片
Route::any('user/godetailspecial/{id}','Home\SpecialController@Detail');
//单个专辑里面添加相片
Route::any('user/adddetailspecial','Home\SpecialController@AddDetail');
//删除单个专辑里面的相片
Route::any('user/deldetailspecial/{id}','Home\SpecialController@DelDetail');
//编辑单个专辑里的单张相片
Route::any('user/editdetailspecial','Home\SpecialController@EditDetail');




//Auth::routes();

//Route::get('/home', 'HomeController@index');
