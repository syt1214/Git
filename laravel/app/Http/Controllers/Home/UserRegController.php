<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Model\send;
use App\Model\RTResult;
class UserRegController extends Controller
{
    public function Check(Request $request)
    {
        //验证用户注册的表单内容
        $reg_name = $request->input('username');
        $reg_pass = $request->input('password');
        $reg_phone = $request->input('phone');
        $reg_email = $request->input('email');
        $time = time();
        $code = $request->input('checkcode');
        $recode = DB::table('temp_codes')->where('phone', $reg_phone)->get();
        $deadtime = DB::table('temp_codes')->where('phone', $reg_phone)->get();
        $rt_result = new RTResult;
        if($reg_name=='') {
            $rt_result->status = 1;
            $rt_result->message = '亲，用户名不能为空哦';
            return $rt_result->toJson();
        }
        if($reg_pass=='') {
            $rt_result->status = 2;
            $rt_result->message = '亲，密码不能为空哦';
            return $rt_result->toJson();
        }
        if($code=='') {
            $rt_result->status = 3;
            $rt_result->message = '亲，验证码不能为空哦';
            return $rt_result->toJson();
        }
        if($code!=$recode) {
            $rt_result->status = 4;
            $rt_result->message = '验证码错误哦，请重新输入吧！';
            return $rt_result->toJson();
        }
//        die;
        $result = DB::table('users')->insert([
            'username' => $reg_name,
            'password' =>$reg_pass,
            'phone' => $reg_phone,
            'email' => $reg_email,
            'regtime' => $time,
        ]);
        dd($result);
        return view('home/login');
    }

    public function GetCode()
    {
        $phone=$_GET['phone'];
        $time=time();
        //验证码失效的时间
        $deadtime=$time+5*60;
        //设置发送短信的随机数
        $str = '0123456789';
        $code = '';
        for ($i = 0; $i < 4; $i ++) {
            $code .= $str{mt_rand(0, strlen($str) - 1)};
        }
        //调用发送短信方法
        $sendTemplateSMS=new send();
        $sendTemplateSMS->sendTemplateSMS($phone, array($code, 5), "1");
        $result=DB::table('temp_codes')->insert([
            'phone'=>$phone,
            'code'=>$code,
            'deadtime'=>$deadtime,
        ]);
        dd($result);
    }
}
