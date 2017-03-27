<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Mews\Captcha\Facades\Captcha;
use Illuminate\Support\Facades\Validator;
class SetPassController extends Controller
{
    public function SetPass(Request $request)
    {
        $phone=$request->session()->get('phone');
       $oldpass=$request->input('oldpass');
       $newpass=$request->input('newpass');
       $renewpass=$request->input('renewpass');
       $result=DB::table('users')->where('phone',$phone)->update(['password'=>$newpass]);
//       dd($result);
        $rules = [
            "code" => 'required | captcha',
        ];
        $messages = [
            'code.required' => '请输入验证码',
            'code.captcha' => '验证码错误，请重试'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()) {
            return redirect('home/personal')->withErrors($validator);
        }
        return view('home.homepage');
    }
}
