<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户登录</title>
</head>
<body>
    <form action="/user/loginaction"method="post">
        <?php echo csrf_field();?>
        用户名：<input type="text"name="username"value=""><br><br>
        密码：<input type="password"name="password"value=""><br><br>
        <input type="submit"value="确定登录">
    </form>
</body>
</html>