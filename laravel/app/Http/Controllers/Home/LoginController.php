<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
     public function DoLogin(Request $request)
     {
         $login_phone=$request->input('login_phone');
         $login_pass=$request->input('login_pass');
         $password=DB::table('users')->where('phone',$login_phone)->select('password')->get();
//         dd($password);
//         if($login_pass!=$password)
//         {
//             echo '密码不正确';
//         }
//         else {
             return view('home/homepage');
//         }
     }
}
