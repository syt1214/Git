<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use App\Model\send;
use App\Model\REST;
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
        $result=DB::table('users')->insert([
           'username'=>$reg_name,
            'password'=>$reg_pass,
            'phone'=>$reg_phone,
            'email'=>$reg_email,
            'regtime'=>$time,
        ]);
//        dd($result);
    }

    public function GetCode(Request $request)
    {
        $sendTemplateSMS=new REST('app.cloopen.com','8883','2013-12-26');
        $time=time();
        $reg_phone=$request->input('phone');
        //验证码失效的时间
        $deadtime=time()+5*60;
        //设置发送短信的随机数
        $str = '0123456789';
        $code = '';
        for ($i = 0; $i < 4; $i ++) {
            $code .= $str{mt_rand(0, strlen($str) - 1)};
        }
        $content="您在Cherry注册发送的<span style='font-size:16px;color:red;'>验证码</span>是 : <h2>".$code."</h2> 有效时间只有<span style='font-size:16px;color:red;'>五分钟</span>时间哦~快去验证吧";;
        //调用发送短信方法
        $sendTemplateSMS->sendTemplateSMS($reg_phone, array($content, 5), "1");
        $result=DB::table('temp_codes')->insert([
            'phone'=>$reg_phone,
            'code'=>$code,
            'deadtime'=>$deadtime,
        ]);
//        if($deadtime-$time>3000){
//            alert('你输入的验证码超时了');
//        }
    }
}
