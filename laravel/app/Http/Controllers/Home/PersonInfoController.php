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
//        $user_id=$request->session()->get('user_id');
//        $user_id=$user_id[0]->id;
        $user_id=$_POST['user_id'];
       $username=DB::table('users')->where('phone',$phone)->select('username')->get();
       $username=$username[0]->username;
       $sex=$request->input('sex');
       $description=$request->input('description');
//       dd($username);
        $result=DB::table('personals')->insert([
            'user_id'=>$user_id,
            'username'=>$username,
            'sex'=>$sex,
            'description'=>$description,
        ]);
//        dd($result);
        return view('home/homepage')->with(['user_id'=>$user_id]);
    }
}
