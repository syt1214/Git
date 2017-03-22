@extends('layouts/master')
        @section('title','用户修改页面')
        @section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户修改</title>
</head>
<body>
<h2>修改用户</h2>
<form action="/user/EditData" method="post">
    <?php echo csrf_field();?>
    <p><input type="hidden" name="id" value="<?=$_GET['id']?>"></p>
    <p>用户名:<input type="text" name="username" value="<?=$_GET['username']?>"></p>
    <p>年龄：<input type="text" name="age" value="<?=$_GET['age']?>"></p>
    <p>性别：<input type="radio" name="sex" value="0" <?=$_GET['sex'] == 0 ? 'checked' : '';?>/>男
        <input type="radio" name="sex" value="1" <?=$_GET['sex'] == 1 ? 'checked' : '';?>/>女</p>
    <p><input type="submit" value="修改"></p>
</form>
</body>
</html>
@endsection