<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Mews\Captcha\Facades\Captcha;
use Illuminate\Support\Facades\Validator;
class PersonInfoController extends Controller
{
    //跳转到个人信息页面
    public function GoPersonal()
    {
        return view('home.personal');
    }
    //获得头像的控制器
    public function GetHead(Request $request)
    {
        $user_id=Session()->get('user_id');
        $user_id=$user_id[0]->id;
        //为图片命名
        $picname = time() . '.jpg';
        //保存图片
        $result = $request->img->move(public_path() . '/public', $picname);
        $head = $picname;
        $username = DB::table('users')->where('id', $user_id)->select('username')->get();
        $username = $username[0]->username;
        $result = DB::table('headpics')->where('user_id', $user_id)
            ->update([
                'head' => $head,
            ]);
        $request->session()->put('head',$head);
//        dd($result);
        return view('home.personal')->with(['head'=>$head,'user_id'=>$user_id,'username'=>$username]);
    }

    //填写个人信息的控制器
    public function PersonInfo(Request $request)
    {

        $phone=$request->session()->get('phone');
        $user_id=Session()->get('user_id')->first()->id;
//        dd($user_id);
        $persons=DB::table('personals')->where('user_id',$user_id)->get()->first();
//        dd($persons);
       $username=DB::table('users')->where('id',$user_id)->select('username')->get();
       $username=$username[0]->username;
       $sex=$request->input('sex');
       $description=$request->input('description');
//       dd($persons);
        if($persons=='')
        {
            $result=DB::table('personals')->insert([
                'user_id'=>$user_id,
                'username'=>$username,
                'sex'=>$sex,
                'description'=>$description,
            ]);
        }else {
            $result = DB::table('personals')->where('user_id',$user_id)->update([
                'sex' => $sex,
                'description' => $description,
            ]);
        }
//        dd($result);
        return view('home/homepage')->with(['user_id'=>$user_id]);
    }

    //修改个人密码的控制器
    public function SetPass(Request $request)
    {
        $user_id=Session()->get('user_id');
        $user_id=$user_id[0]->id;
        $username=DB::table('users')->where('id',$user_id)->select('username')->get();
        $username=$username[0]->username;
        $head=DB::table('headpics')->where('user_id',$user_id)->select('head')->get();
        $head=$head[0]->head;
        $oldpass=$request->input('oldpass');
        $newpass=$request->input('newpass');
        $renewpass=$request->input('renewpass');
//       dd($result);
        $rules = [
            'oldpass'=>'required',
            "newpass" => 'required',
            "code" => 'required | captcha',
        ];
        $messages = [
            'oldpass.required'=>'亲，原密码不能为空哦',
            'renewpass.required'=>'亲，确认密码不能为空哦',
            'code.required' => '请输入验证码',
            'code.captcha' => '验证码错误，请重试'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()) {
            return view('home.personal')->withErrors($validator)->with(['user_id'=>$user_id,'head'=>$head,'username'=>$username]);;
        }
        $result=DB::table('users')->where('id',$user_id)->update(['password'=>$newpass]);
//        dd($result);
        return view('home.homepage');
    }
}
