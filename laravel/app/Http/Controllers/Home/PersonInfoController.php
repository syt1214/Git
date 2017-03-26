<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class PersonInfoController extends Controller
{
    public function PersonInfo(Request $request)
    {
        $phone=$request->session()->get('phone');
        $uid=$request->session()->get('uid');
       $username=DB::table('users')->where('phone',$phone)->select('username')->get();
       $sex=$request->input('sex');
       $description=$request->input('description');
//       dd($uid);
//       dd($username);
        $result=DB::table('personals')->insert([
            'uid'=>$uid,
            'username'=>$username,
            'sex'=>$sex,
            'description'=>$description,
        ]);
        dd($result);
        return view('home/homepage');
    }
}
