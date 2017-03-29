<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Home\Special;
class SpecialController extends Controller
{
   public function ToSpecial()
   {
       //取出session中的用户id
       $user_id=Session()->get('user_id')->first()->id;
       //根据用户id获取用户所有的专辑
       $allspecial=Special::where('user_id',$user_id)->get();
//       $allspecial=$allspecial->;
       return view('home.special')->with('allspecial',$allspecial);
   }

   public function Create(Request $request)
   {
       //获取前台表单中的专辑名称，标签，描述等等
       $name=$request->name;
       $desc=$request->desc;
       $tag=$request->tag;
       $pic=$request->pic;
       $user_id=Session()->get('user_id')->first()->id;
       $Special=new Special();
      //如果接受的名字为空，就不执行
       if($name!='') {
           //如果接受的图片为空，就默认给一张图片
           if ($pic == '') {
               $pic = '1.jpg';
           } else {
               $pic = time() . '.jpg';
           }
           $request->pic->move(public_path() . '/public', $pic);
           //执行插入到数据库的操作
           $Special->user_id = $user_id;
           $Special->name = $name;
           $Special->desc = $desc;
           $Special->tag = $tag;
           $Special->pic = $pic;
           $result = $Special->save();
//           dd($result);
           if ($result == 'true') {
               return redirect('user/special');
           }
       }else{
            return view('home.special');
       }
   }

   //删除个人专辑
    public function Delete($id)
    {
       $result=Special::where('id',$id)->delete();
       return redirect('user/special');
    }
}
