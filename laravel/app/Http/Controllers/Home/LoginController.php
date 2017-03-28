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
         $checkcode=$request->input('code');
         $password=DB::table('users')->where('phone',$login_phone)->select('password')->get();
         $pass=$password[0]->password;
         $user_id=DB::table('users')->where('phone',$login_phone)->select('id')->get();

//         dd(session()->get('phone'));
//         if($login_phone=='')
//         {
//             $rt_result->status = 1;
//             $rt_result->message = '手机号不能为空哦';
//             return $rt_result->toJson();
//         }
//         if($login_pass=='')
//         {
//             $rt_result->status = 2;
//             $rt_result->message = '密码不能为空哦';
//             $user_id=$user_id[0]->id;;
//             return $rt_result->toJson();
//         }
//         if($login_pass!=$pass)
//         {
//             $rt_result->status = 3;
//             $rt_result->message = '密码错误哦';
//             return $rt_result->toJson();
//         }
//         if($checkcode=='')
//         {
//             $rt_result->status = 4;
//             $rt_result->message = '验证码不能为空哦';
//             return $rt_result->toJson();
//         }
         $request->session()->put('phone',$login_phone);
         $request->session()->put('user_id',$user_id);
         $user_id=$request->session()->get('user_id');
         $user_id=$user_id[0]->id;
         $username=DB::table('users')->where('id',$user_id)->select('username')->get();
         $head=DB::table('headpics')->where('user_id',$user_id)->select('head')->get();
         $head=$head[0]->head;
         $username=$username[0]->username;
//         dd($username);
//         dd($user_id);
//         if($user_id !='')
//         {
//             $rt_result->status = 0;
//             $rt_result->session = $user_id;
//             return $rt_result->toJson();
//         }
//         if($login_pass!=$pass)
//         {
//             return;
//         }
         $rules = [
             "login_phone" => 'required',
             "login_pass" => 'required',
             "code" => 'required | captcha',
        ];
        $messages = [
            'login_phone.required'=>'请输入密码',
            'login_pass.required'=>'请输入密码或者密码错误',
            'code.required' => '请输入验证码',
            'code.captcha' => '验证码错误，请重试'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()) {
//            $rt_result->status = 6;
//            $rt_result->message = '验证码错误哦，请重新输入吧';
//            return $rt_result->toJson();
            return view('home/login')->withErrors($validator);

        }
//             dd($user_id);
             return view('home/personal')->with(['user_id'=>$user_id,'head'=>$head,'username'=>$username]);
     }
}
