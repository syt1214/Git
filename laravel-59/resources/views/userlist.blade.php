@extends('layouts.master')
        @section('content')
        @section('title','用户列表页')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户列表</title>
</head>
<body>
    <table align="center" width="500" cellpadding="5" cellspacing="0" border="1">
        <caption><h2>用户列表</h2><h3><a href="/user/addForm">添加用户</a></h3><a href="/user/login">登录</a></h3></caption>
        <tr>
            <th>ID</th>
            <th>用户名</th>
            <th>性别</th>
            <th>年龄</th>
            <th>操作</th>
        </tr>
        <?php foreach ($rows as $v) :?>
            <tr>
                <td><?php echo $v->id?></td>
                <td><?php echo $v->username?></td>
                <td><?php echo $v->se"/user/editForm?ix?></td>
                <td><?php echo $v->age?></td>
                <td><a href=d=<?php echo $v->id?>&username=<?=$v->username?>&age=<?=$v->age?>&sex=<?=$v->sex?>">修改</a> | <a href="/user/delData?id=<?php echo $v->id?>">删除</a></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>
@endsection