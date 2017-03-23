<?php

namespace App\Http\Controllers\Home;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserRegController extends Controller
{
    public function Check(Request $request)
    {
        //验证用户注册的表单内容
        $reg_name=$request->input('username');
        $reg_pass=$request->input('password');
        $reg_phone=$request->input('phone');
        $reg_email=$request->input('email');
        $time=time();
//        dd($time);
        $result=DB::table('users')->insert([
           'username'=>$reg_name,
            'password'=>$reg_pass,
            'phone'=>$reg_phone,
            'email'=>$reg_email,
            'regtime'=>$time,
        ]);
//        dd($result);
    }
}
