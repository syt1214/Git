
@extends('home/master')
@section('title','堆糖生活家--登录')
@section('style')
    <link rel="stylesheet" href="{{url('css/guide.5f5b49b9.css')}}">
    <style>
        #dt-header
        {
            opacity:0.6;
        }
    </style>
@endsection
@section('content')
<div class="section section1" style="width:100%;height:650px;position: relative;top:100px;opacity:0.6;">
    <img class="pg-next-page" src="{{url('images/20160819111217_jcekk.png')}}" />

    <div style="text-align: center;margin-top: -100px;">
        <div class="pg-mac-img fadeUpS speed2 animate" style="width: 100%;height: 0;padding-bottom: 67.167%;background: url({{url('images/20160818104653_vsauu_1.png')}}) no-repeat;background-size: 100% 100%;">
        </div>
        <img class="pg-logo" src="{{url('images/20160818104651_h4i5u.png')}}">
        <div class="pg-title">生活不仅是活着，还需要一点仪式感</div>
        <div class="pg-sub-title">／这种认真的生活态度，是感受幸福的条件／</div>
        <a class="to-be-lifer" id="dt-login-page" href="javascript:;" data-next="/life_artist/index/">
            <div class="pg-cnt-btn" id="to-be-lifer">成为堆糖生活家&nbsp;></div>
        </a>
    </div>
</div>
<div class="blockUI blockMsg blockPage" style="z-index: 9011; position: fixed; padding: 0px; margin: -273px 0px 0px -330px; width: 660px; top: 50%; left: 50%; text-align: left; color: rgb(0, 0, 0); border: none; height: 506px; background: none;opacity:1">
    <div class="mask-body" style="width: 660px;">
        <div class="tt-s"><span>登录</span><a class="mask-close" target="_self" href="{{url('user/goregister')}}" >关闭</a></div>
        <div class="mask-cont">
            <div id="poplogin" class="win-wraper clr">
                <div class="login clr">
                    <div class="cont">
                        <form id="dt-form-login" method="post" action="{{url('user/login')}}"return flag>
                            {{csrf_field()}}
                            <div class="dt-unme cnt-i clr">
                                <input type="text" name="login_phone" placeholder="手机号">
                            </div>
{{--                            <span>{{$errors->first('login_phone')}}</span>--}}
                            <div class="dt-pswd cnt-i clr">
                                <input type="password" id="p-password" name="login_pass" placeholder="密码">
                            </div>
{{--                            <span>{{$errors->first('login_pass')}}</span>--}}

                            <div class="checkcode" style="margin-bottom:20px;">
                                <input type="text" placeholder="验证码" name="code"style="width:120px;height:35px;position:relative;top:20px;">
                                <div style="float:right;"><img src="{{captcha_src()}}" alt=""style="margin-top:20px;margin-left:15px;cursor:pointer;" id="code"></div>
                            </div>
{{--                            <span>{{$errors->first('code')}}</span>--}}
                            <div class="u-chk clr">
                                <input class="chk" type="checkbox" name="remember" id="poplogin-rem" value="" checked="">
                                <label for="poplogin-rem">记住我</label><a href="" style="position: relative;left: 100px;">忘记密码？</a></div>
                            <div class="submit clr">
                                <a>
                                    <button type="submit" class="pg-loginbtn" style="width: 200px;height:40px;background: #22B4F6;border:none;font-size:14px;color:white;font-weight:bold;margin-left:30px;cursor:pointer"><u>登录</u></button>
                                </a>
                            </div>
                        </form>
                        <div class="pg-reg">
                            <a class="qqsite" href="" >
                                <i class="pg-QQ"></i></a><a class="weibo" href="" ><i class="pg-weibo"></i></a>
                            <a class="douban" href="" >
                                <i class="pg-douban"></i></a><a class="taobao" href="" ><i class="pg-taobao"></i></a><a class="qweibo" href="" ><i class="pg-qqweibo"></i></a></div>
                    </div>
                    <div class="sites">
                        <div class="clr" style="height:314px;width:200px;padding:0 0 14px;">
                            <a href="javascript:;" style="cursor:default;width: 100%;height: 100%;background: none;text-indent: 0;text-align: center;position:relative;top:-30px;"><img src="{{url('images/20160523143146_uftys.png')}}">
                                <p style="color: #666;margin-top: 24px;font-size: 14px;">扫一扫下载手机客户端</p>
                                <p style="color: #666;font-size: 14px;">浏览体验更佳</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="toreg clr"><a href="{{url('home/register')}}">还没有账号?立即注册</a></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(".checkcode img").click(function () {
        $("#code").attr('src',"{{captcha_src()}}"+Math.random());
    });

    //用户登录
    $("#dt-form-login").submit(function () {
        //数据验证
        //获取数据
        var data= $(this).serialize();
        console.log(data);
        $.ajax({
            url: '{{url('user/login')}}',
            data: data,
            type: 'post',
            dataType:'json',
            success: function (data) {
                if(data.status!=0)
                {
                    alert(data.message);
                    return;
                }
                location.href = "{{url('user/gopersonal')}}";
            },

            error:function (xhr, status, error) {
//                 alert(111);
                console.log(error);
                console.log(xhr);
                console.log(status);
            }
        })
        return false;
    });
</script>
@endsection
