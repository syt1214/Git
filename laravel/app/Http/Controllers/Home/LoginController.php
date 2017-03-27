<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Model\RTResult;
class LoginController extends Controller
{
     public function DoLogin(Request $request)
     {
         $rt_result = new RTResult;
         $login_phone=$request->input('login_phone');
         $login_pass=$request->input('login_pass');
//         dump($login_pass);
         $checkcode=$request->input('code');
         $password=DB::table('users')->where('phone',$login_phone)->select('password')->get();
//         dd($password);
         $user_id=DB::table('users')->where('phone',$login_phone)->select('id')->get();
         $request->session()->put('phone',$login_phone);
         $request->session()->put('user_id',$user_id);
//         dd(session()->get('phone'));
         if($login_phone=='')
         {
             $rt_result->status = 1;
             $rt_result->message = '手机号不能为空哦';
             return $rt_result->toJson();
         }
         if($login_pass=='')
         {
             $rt_result->status = 2;
             $rt_result->message = '密码不能为空哦';
             return $rt_result->toJson();
         }
         if($login_pass!==$password)
         {
             $rt_result->status = 3;
             $rt_result->message = '密码错误哦';
             return $rt_result->toJson();
         }
         if($checkcode=='')
         {
             $rt_result->status = 4;
             $rt_result->message = '验证码不能为空哦';
             return $rt_result->toJson();
         }
          $rules = [
            "code" => 'required | captcha',
        ];
        $messages = [
            'code.required' => '请输入验证码',
            'code.captcha' => '验证码错误，请重试'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()) {
            return redirect('home/login')->withErrors($validator);
        }
             return view('home/personal')->with(['user_id'=>$user_id]);
     }
}
