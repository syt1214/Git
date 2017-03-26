window.onload=function()
{
    var newpass=document.myform.newpass.value;
    var renewpass=document.myform.renewpass.value;
    var repass=document.getElementById('renewpass');
    repass.onblur=function() {
        console.log(newpass);
        if (newpass != renewpass) {
            alert('亲，你输入的两次密码不一致哦，请重新输入吧');
        }
    }
}