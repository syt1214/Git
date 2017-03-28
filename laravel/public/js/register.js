
//验证用户名ss
$(function () {
    $("#username").blur(function () {
        // alert($);
        //获取表单中的元素
        var username = $("input[name=username]").val();
        //获取span标签
        var uspan = $('#uspan');
        console.log(username);
        //判断是否为空
        if (username == '') {
            //验证失败，向span中写入一个提示信息
            uspan.html("<a style='color:red;'>亲，用户名不能为空哦</a>");
            //return false;
            flag = false;
        } else {
            uspan.html("<a style='color:green'>√</a>") ;
        }
    })

    //验证密码
    $("#password").blur(function () {
        //获取表单中的元素
        var password = $("input[name=password]").val();
        ;
        //获取span标签
        var passspan = $('#passspan');
        //判断密码格式是否正确
        if (password == '') {
            passspan.html("<a style='color:red;'>亲，密码不能为空哦</a>");
            //return false;
            flag = false;
        } else {
            passspan.html( "<a style='color:green'>√</a>");
        }
    })

    //验证邮箱
    $("#email").blur(function () {
        //获取表单中的元素
        var email = $("input[name=email]").val();
        //获取span标签
        var espan = $('#espan');
        //判断email格式是否正确
        if (email.indexOf('@') == -1) {
            espan.html("<a style='color:red;'>邮箱格式不正确</a>");
            //return false;
            flag = false;
        } else {
            espan.html("<a style='color:green'>√</a>") ;
        }
    })


//验证手机
    $("#phone").blur(function () {
        //获取表单中的元素
        var phone = $("input[name=phone]").val();
        //获取span标签
        var pspan = $('#pspan');
        var length = phone.length;
        //判断phone格式是否正确
        if (length != 11) {
            pspan.html( "<a style='color:red;'>手机号格式不正确</a>");
            //return false;
            flag = false;
        } else {
            pspan.html("<a style='color:green'>√</a>") ;
        }
    })
});


