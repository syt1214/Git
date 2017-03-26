<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SetPassController extends Controller
{
    public function SetPass(Request $request)
    {
        $phone=$request->session()->get('phone');
       $oldpass=$request->input('oldpass');
       $newpass=$request->input('newpass');
       $renewpass=$request->input('renewpass');
       $result=DB::table('users')->where('phone',$phone)->update(['password'=>$newpass]);
       dd($result);
    }
}
