<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //显示列表
    public function Show()
    {
        $user=session('user');
        $rows=DB::table('users')->where('user',$user)->get();
        return view('userlist', ['rows' => $rows]);
    }
    //得到表单数据
    public function addForm()
    {
        return view('useradd');
    }
    public function addData(Request $request)
    {
        //获取session中的用户
        $user=session('user');
        $password=session('password');
        //添加用户数据
            $name = $request->input('username');
            $age = $request->input('age');
            $sex = $request->input('sex');
            $result=DB::insert("insert into users(user,password,username, age, sex) values('{$user}','{$password}','{$name}', '{$age}', '{$sex}')");
            return redirect('/user/show');
            //return '添加用户信息';
    }

    //得到表单数据
    public function editForm()
    {
        //获取session中的用户，然后显示该用户的一些用户管理
        $user=session('user');
        $id = $_GET['id'];
        $username = $_GET['username'];
        $age = $_GET['age'];
        $sex = $_GET['sex'];
         //    dd($_GET);
        return view('useredit')->with([
            'id' => $id, 'username' => $username, 'age' => $age, 'sex' => $sex,'user'=>$user
        ]);
    }

    public function EditData(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('username');
        $age = $request->input('age');
        $sex = $request->input('sex');
        $result=DB::update("update users set username='{$name}',age='{$age}',sex='{$sex}' where id='{$id}'");
        return redirect('/user/show');
    }
    //删除数据
    public function delData(Request $request){
        $id = $_GET['id'];
        $result=DB::delete("delete from users where id='{$id}'");
        return redirect('/user/show');
    }
    //登录
    public function Login()
    {
    //       $connection= DB::connection()->getPdo();
     //       dd($connection);
        return view('login');
    }
    //登录操作
    public function Loginaction(Request $request)
    {
        $username=$request->input('username');
        //将用户保存在session中
        session(['user'=>$username]);
        $rows=DB::table('users')->where('user',$username)->get();
        return view('userlist', ['rows' => $rows]);

    }
}

/*class StuController extends Controllers
{
    public $name;
    public $age;
    public function display()
    {
       echo '你好啊';
    }
    public function __construct($name,$age)
    {
        $name=$this->name;
        $age=$this->age;
    }
}
$stu=new Stu('张三',30);
var_dump($stu);*/