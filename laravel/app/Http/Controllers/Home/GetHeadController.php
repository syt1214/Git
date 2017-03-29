<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GetHeadController extends Controller
{
    public function GetHead(Request $request)
    {
        $user_id=$_POST['user_id'];
        $picname=time().'.jpg';
        $result=$request->img->move(public_path().'/public',$picname);
        $head=$picname;
        $result=DB::table('headpics')->where('user_id',$user_id)
        ->update([
            'head'=>$head,
        ]);
//        dd($result);
        return redirect('user/gopersonal')->with(['head'=>$head,'user_id'=>$user_id]);
    }
}
