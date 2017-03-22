@extends('layouts/master')
        @section('title','用户添加页面')
        @section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户添加</title>
</head>
<body>
<h2>添加用户</h2>
<form action="/user/addData" method="post">
    <?php echo csrf_field();?>
    <p>用户名:<input type="text" name="username" value=""></p>
    <p>年龄：<input type="text" name="age" value=""></p>
    <p>性别：<input type="radio" name="sex" value="0">男<input type="radio" name="sex" value="1">女</p>
    <p><input type="submit" value="添加"></p>
</form>
</body>
</html>
@endsection