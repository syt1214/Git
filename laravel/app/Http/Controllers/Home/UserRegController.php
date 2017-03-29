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
    public function GoRegister()
    {
        return view('home.register');
    }
    public function Check(Request $request)
    {
        //验证用户注册的表单内容
        $reg_name = $request->input('username');
        $reg_pass = $request->input('password');
        $reg_phone = $request->input('phone');
        $reg_email = $request->input('email');
        $time = time();
        $code = $request->input('checkcode');
        $deadtime = DB::table('temp_codes')->where('phone', $reg_phone)->max('deadtime');
//        dd($deadtime);
        $recode = DB::table('temp_codes')->where('deadtime', $deadtime)->select('code')->get();
        $recode=$recode[0]->code;
//        dd($recode);
        $rt_result = new RTResult;
        if($code=='') {
            $rt_result->status= 1;
            $rt_result->message= '亲，验证码不能为空哦';
            return $rt_result->toJson();
        }
        if($code!=$recode) {
            $rt_result->status= 2;
            $rt_result->message= '验证码错误哦，请重新输入吧！';
            return $rt_result->toJson();
        }
            $result = DB::table('users')->insert([
                'username' => $reg_name,
                'password' => $reg_pass,
                'phone' => $reg_phone,
                'email' => $reg_email,
                'regtime' => $time,
            ]);
        if($result == true) {
            $rt_result->status = 0;
            $rt_result->message = '注册成功';
            return $rt_result->toJson();
        }
//        dd($result);
//        return redirect('home/login');
    }

    public function GetCode()
    {
        $phone=$_GET['phone'];
//        dd($phone);
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
//        dd($sendTemplateSMS);die;
        $result=DB::table('temp_codes')->insert([
            'phone'=>$phone,
            'code'=>$code,
            'deadtime'=>$deadtime,
        ]);
//        dd($result);
    }
}
