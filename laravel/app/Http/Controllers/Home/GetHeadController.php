<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GetHeadController extends Controller
{
    public function GetHead(Request $request)
    {
        $user_id=$request->input('user_id');
        $head=$_FILES['img'];
        $result=DB::table('headpics')->insert([
            'user_id'=>$user_id,
            'head'=>$head,
        ]);
//        dd($result);
        return view('home.personal');
    }
}
