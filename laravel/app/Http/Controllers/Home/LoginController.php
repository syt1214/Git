<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
     public function DoLogin(Request $request)
     {
         $login_phone=$request->input('login_phone');
         $login_pass=$request->input('login_pass');
         $password=DB::table('users')->where('phone',$login_phone)->select('password')->get();
         $uid=DB::table('users')->where('phone',$login_phone)->select('id')->get();
//         dd($password);
         $request->session()->put('phone',$login_phone);
         $request->session()->put('uid',$uid);
//         if($login_pass!=$password)
//         {
//             echo '密码不正确';
//         }
//         else {
             return view('home/personal')->with(['uid'=>$uid]);
//         }
     }
}
