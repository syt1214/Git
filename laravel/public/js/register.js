
    //验证用户名
    function checkUser() {
        //获取表单中的元素
        var username = document.myform.username.value;
        //获取span标签
        var uspan = document.getElementById('uspan');
        //console.log(username);
        //判断是否为空
        if (username == '') {
            //验证失败，向span中写入一个提示信息
            uspan.innerHTML = "<a style=\"color:red;\">用户名不能为空</a>";
            //return false;
            flag = false;
        } else {
            uspan.innerHTML = "<a style=\"color:green\">√</a>";
        }
    }

    //验证邮箱格式
    function checkEmail() {
        //获取表单中的元素
        var email = document.myform.email.value;
        //获取span标签
        var espan = document.getElementById('espan');
        //判断email格式是否正确
        if (email.indexOf('@') == -1) {
            espan.innerHTML = "<a style=\"color:red;\">邮箱格式不正确</a>";
            //return false;
            flag = false;
        } else {
            espan.innerHTML = "<a style=\"color:green\">√</a>";
        }
    }
   //验证密码
    function checkPass() {
        //获取表单中的元素
        var password = document.myform.password.value;
        //获取span标签
        var passspan = document.getElementById('passspan');
        //判断密码格式是否正确
        if (password=='') {
            passspan.innerHTML = "<a style=\"color:red;\">密码不能为空</a>";
            //return false;
            flag = false;
        } else {
            passspan.innerHTML = "<a style=\"color:green\">√</a>";
        }
    }
    //验证电话
    function checkPhone() {
        //获取表单中的元素
        var phone = document.myform.phone.value;
        //获取span标签
        var pspan = document.getElementById('pspan');
        var length=phone.length;
        //判断phone格式是否正确
        if (length!=11) {
            pspan.innerHTML = "<a style=\"color:red;\">手机号格式不正确</a>";
            //return false;
            flag = false;
        } else {
            pspan.innerHTML = "<a style=\"color:green\">√</a>";
        }
    }

    function checkForm() {
        flag = true;
        checkUser();
        checkEmail();
        checkPass();
        checkPhone();
        return flag;
    }