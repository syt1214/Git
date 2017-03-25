<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\send;
//use App\Model\REST;
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
//        if($code!=$recode)
//        {
//          $res['status'] = 0;
//          $res['mess'] = '验证码输入不正确';
//          return json_encode($res);
//        }
//        if($time-$deadtime>300)
//        {
//            $res['status'] = 1;
//            $res['mess'] = '验证码超时';
//            return json_encode($res);
//        }
//        else {
        $result = DB::table('users')->insert([
            'username' => $reg_name,
            'password' => $reg_pass,
            'phone' => $reg_phone,
            'email' => $reg_email,
            'regtime' => $time,
        ]);
//        dd($result);
//        }
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
        $sendTemplateSMS->sendTemplateSMS($phone, array($code, 5), "1");die;
        $result=DB::table('temp_codes')->insert([
            'phone'=>$phone,
            'code'=>$code,
            'deadtime'=>$deadtime,
        ]);
        dump($result);
    }
}
