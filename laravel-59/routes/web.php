<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
	return view('welcome');
});


/*Route::get('user/show', function () {
	//链接数据库
	$link = mysqli_connect('localhost', 'root', '');
	//选择数据库
	mysqli_select_db($link, 'laravel');
	//设置字符集
	mysqli_set_charset($link, 'utf8');
	//准备sql语句，完成执行sql
	$sql = "select * from users";
	$result = mysqli_query($link, $sql);
	//处理结果集
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	//var_dump($rows);
	//return '用户列表';
	return view('userlist', ['rows' => $rows]);
});
//添加的表单路由
Route::get('user/addForm', function () {
	//return '添加表单';
	return view('useradd');
});
//添加用户数据
Route::post('user/addData', function () {
	//接受数据
	//var_dump($_POST);
	$name = $_POST['username'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
	//数据库的操作
	$link = mysqli_connect('localhost', 'root', '');
	//选择数据库
	mysqli_select_db($link, 'laravel');
	//设置字符集
	mysqli_set_charset($link, 'utf8');
	//准备sql语句，完成执行sql
	$sql = "insert into users(username, age, sex) values('{$name}', '{$age}', '{$sex}')";
//	echo $sql;die;
	$result = mysqli_query($link, $sql);
	var_dump($result);
	//die();
	return redirect('/user/show');
	//return '添加用户信息';
});

//修改表单路由
Route::get('user/editForm', function () {
//    return '修改表单';
	$id = $_GET['id'];
//    var_dump($id);die;
	$username = $_GET['username'];
	$age = $_GET['age'];
	$sex = $_GET['sex'];
//    dd($_GET);
	return view('useredit')->with([
		'id' => $id, 'username' => $username, 'age' => $age, 'sex' => $sex,
	]);
});

//修改用户数据
Route::post('user/EditData', function () {
	//接受数据
	//var_dump($_POST);
	$id = $_POST['id'];
	$name = $_POST['username'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
	//数据库的操作
	$link = mysqli_connect('localhost', 'root', '');
	//选择数据库
	mysqli_select_db($link, 'laravel');
	//设置字符集
	mysqli_set_charset($link, 'utf8');
	//准备sql语句，完成执行sql
	$sql = "update users set username='{$name}',age='{$age}',sex='{$sex}' where id='{$id}'";
//    echo $sql;die;
	$result = mysqli_query($link, $sql);
//    var_dump($result);die;
	return redirect('/user/show');
});

//删除用户数据
Route::get('user/delData', function () {
	$id = $_GET['id'];
	//数据库的操作
	$link = mysqli_connect('localhost', 'root', '');
	//选择数据库
	mysqli_select_db($link, 'laravel');
	//设置字符集
	mysqli_set_charset($link, 'utf8');
	//准备sql语句，完成执行sql
	$sql = "delete from users  where id='{$id}'";
//    echo $sql;die;
	$result = mysqli_query($link, $sql);
//    var_dump($result);die;
	return redirect('/user/show');
});*/
Route::get('user/show','LoginController@Show');
Route::get('user/addForm', 'LoginController@addForm');
Route::post('user/addData','LoginController@addData');
Route::get('user/editForm', 'LoginController@editForm');
Route::post('user/EditData','LoginController@EditData');
Route::get('user/delData','LoginController@delData');
Route::get('user/login','LoginController@Login');
Route::post('user/loginaction','LoginController@Loginaction');


