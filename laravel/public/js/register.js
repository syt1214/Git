
//验证用户名
$("#username").blur(function () {
    //获取表单中的元素
    var username = $("input[name=username]").val();
    //获取span标签
    var uspan = $('#uspan');
    console.log(username);
    //判断是否为空
    if (username == '') {
        //验证失败，向span中写入一个提示信息
        uspan.html = "<a style=\"color:red;\">用户名不能为空</a>";
        //return false;
        flag = false;
    } else {
        uspan.html = "<a style=\"color:green\">√</a>";
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
        espan.html = "<a style=\"color:red;\">邮箱格式不正确</a>";
        //return false;
        flag = false;
    } else {
        espan.html = "<a style=\"color:green\">√</a>";
    }
})
//验证密码
$(".password").blur(function () {
    //获取表单中的元素
    var password = $("input[name=password]").val();;
    //获取span标签
    var passspan = $('#passspan');
    //判断密码格式是否正确
    if (password=='') {
        passspan.html = "<a style=\"color:red;\">密码不能为空</a>";
        //return false;
        flag = false;
    } else {
        passspan.html = "<a style=\"color:green\">√</a>";
    }
})

//验证手机
$(".phone").blur(function () {
    //获取表单中的元素
    var phone = $("input[name=phone]").val();
    //获取span标签
    var pspan = $('#pspan');
    var length=phone.length;
    //判断phone格式是否正确
    if (length!=11) {
        pspan.html = "<a style=\"color:red;\">手机号格式不正确</a>";
        //return false;
        flag = false;
    } else {
        pspan.html = "<a style=\"color:green\">√</a>";
    }
})

//
//  $("#reg-form").submit(function () {
//      var data= $(this).serialize();
//      console.log(data);
//      var flag=true;
//      var phone = $('#phone').val();
//       $.ajax({
//         url: 'user/reg',
//         data: data,
//         type: 'post',
//         datatype: 'json',
//         success: function (data) {
//             // alert(111);
//             if (data == null) {
//                 alert('服务器繁忙');
//                 return;
//             }
//             if (data.status != 0) {
//                 alert('验证码错误！亲，请重新输入吧');
//                 return;
//             }
//             location.href = "{{url('home/register')}}";
//         },
//         error:function (xhr, status) {
//             // alert(111);
//             console.log(xhr);
//             console.log(status);
//         }
//     })
//     return false;
// });

