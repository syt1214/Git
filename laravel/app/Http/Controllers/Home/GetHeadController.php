<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GetHeadController extends Controller
{
    public function GetHead(Request $request)
    {
        $uid=$request->input('uid');
        $head=$_FILES['img'];
        $result=DB::table('headpics')->insert([
            'uid'=>$uid,
            'head'=>$head,
        ]);
        dd($result);
        return view('home.personal');
    }
}
