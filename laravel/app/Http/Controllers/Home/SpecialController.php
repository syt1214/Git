<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Home\Special;
use App\Home\SpecialPics;
use Illuminate\Support\Facades\DB;

class SpecialController extends Controller
{
   public function ToSpecial()
   {
       //取出session中的用户id
       $user_id=Session()->get('user_id');
       //根据用户id获取用户所有的专辑
       $allspecial=Special::where('user_id',$user_id)->get()->toArray();
       return view('home.special')->with('allspecial',$allspecial);
   }

   public function Create(Request $request)
   {
       //获取前台表单中的专辑名称，标签，描述等等
       $name=$request->name;
       $desc=$request->desc;
       $tag=$request->tag;
       $pic=$request->pic;
       $user_id=Session()->get('user_id');
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

    //编辑整个专辑，有描述和标签
    public function Edit(Request $request,$id)
    {
        $special_id=$request->special_id;
        $name=$request->name;
        $desc=$request->desc;
        $tag=$request->tag;
        //执行修改的操作
        $result=DB::table('specials')->where('id',$special_id)->update([
            'name'=>$name,'desc'=>$desc,'tag'=>$tag
        ]);
        return back()->with('id',$special_id);
    }

   //查看个人专辑的详细信息,这里的id是专辑的id
    public function Detail($id)
   {
       $detail=SpecialPics::where('special_id',$id)->get()->toArray();
//       dd($detail);
       $special=Special::where('id',$id)->get()->toArray();
       $special=$special[0];
//       dd($special);
       $tag=$special['tag'];
      return view('home.detailspecial')->with(['detail'=>$detail,'tag'=>$tag,'special_id'=>$id,'special'=>$special]);
   }
    //添加个人专辑的详情
    public function AddDetail(Request $request)
    {
         $user_id=Session()->get('user_id');
         $special_id=$request->input('special_id');
         $desc=$request->input('desc');
         $pic= time().'.jpg';
         $request->pic->move(public_path().'/public', $pic);
         $specialpics=new SpecialPics();
        $specialpics->user_id=$user_id;
        $specialpics->desc=$desc;
        $specialpics->special_id=$special_id;
        $specialpics->pics=$pic;
        $result=$specialpics->save();
//        dd($result);
//        return redirect('user/godetailspecial')->with('id',$special_id);
        return back()->with('id',$special_id);
    }

    //单个专辑内的相片id
    public function DelDetail($id)
    {
        $specialpic=SpecialPics::where('id',$id)->get()->toArray();
        //专辑的id
        $special_id=$specialpic[0]['special_id'];
//        dd($special_id);
        $result=SpecialPics::where('id',$id)->delete();
//        return redirect('user/godetailspecial')->with('id',$special_id);
        return back()->with('id',$special_id);
    }

    //单个专辑内的相片信息的修改
    public function EditDetail(Request $request)
    {
        //相片id
       $id=$request->input('id');
       $desc=$request->input('desc');
       $result=DB::table('specialpics')->where('id',$id)->update([
          'desc'=>$desc,
       ]);
      return back()->with('id',$id);
    }
}
