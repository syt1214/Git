<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Mews\Captcha\Facades\Captcha;
use Illuminate\Support\Facades\Validator;
use App\Model\RTResult;
class PersonInfoController extends Controller
{
    //跳转到个人信息页面
    public function GoPersonal()
    {
        $personal=DB::table('personals')->join('headpics',function($join){
           $join->on('personals.user_id','headpics.user_id')->where('personals.user_id',Session()->get('user_id'));
        })->get();
        $personal=$personal[0];
        return view('home.personal')->with(['personal'=>$personal]);
    }
    //获得头像的控制器
    public function GetHead(Request $request)
    {
        $user_id=Session()->get('user_id');
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
        return redirect('user/gopersonal');
    }

    //填写个人信息的控制器
    public function PersonInfo(Request $request)
    {

        $phone=$request->session()->get('phone');
        $user_id=Session()->get('user_id');
        $persons=DB::table('personals')->where('user_id',$user_id)->get()->first();
       $username=DB::table('users')->where('id',$user_id)->select('username')->get();
       $username=$username[0]->username;
       $sex=$request->input('sex');
       $description=$request->input('description');
//       dd($persons);
        //如果原先数据结果为空就插入到数据库，否则更新
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
        $rt_result = new RTResult;
        $user_id=Session()->get('user_id');
        $username=DB::table('users')->where('id',$user_id)->select('username')->get();
        $username=$username[0]->username;
        $head=DB::table('headpics')->where('user_id',$user_id)->select('head')->get();
        $head=$head[0]->head;
        $oldpass=$request->input('oldpass');
        $newpass=$request->input('newpass');
        $renewpass=$request->input('renewpass');
        $code=$request->input('code');
        if($oldpass=='')
        {
            $rt_result->status= 1;
            $rt_result->message= '亲，旧密码不能为空哦';
            return $rt_result->toJson();
        }
        if($newpass=='')
        {
            $rt_result->status= 2;
            $rt_result->message= '亲，新密码不能为空哦';
            return $rt_result->toJson();
        }
        if($renewpass=='')
        {
            $rt_result->status= 3;
            $rt_result->message= '亲，确认密码不能为空哦';
            return $rt_result->toJson();
        }
        if($code=='')
        {
            $rt_result->status= 4;
            $rt_result->message= '亲，验证码不能为空哦';
            return $rt_result->toJson();
        }
        $rules = [
            "code" => 'captcha',
        ];
        $messages = [
            'code.captcha' => '验证码错误，请重试'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()) {
            $rt_result->status= 5;
            $rt_result->message= '亲，验证码输入错误哦';
            return $rt_result->toJson();
//            return redirect('user/gopersonal')->withErrors($validator);
        }
        $result=DB::table('users')->where('id',$user_id)->update(['password'=>$newpass]);
        if($result==true)
        {
            $rt_result->status= 0;
            $rt_result->message= '亲，你已经成功修改了密码哦';
            return $rt_result->toJson();
        }
//        return view('home.homepage');
    }
}
