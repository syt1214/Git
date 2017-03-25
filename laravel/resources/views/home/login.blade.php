
@extends('home/master')
@section('title','登录')
@section('style')
    <link rel="stylesheet" href="{{url('css/guide.5f5b49b9.css')}}">
@endsection
@section('content')
<div class="section section1" style="width:100%;height:650px;position: relative;top:100px;opacity:0.6;">
    <img class="pg-next-page" src="{{url('images/20160819111217_jcekk.png')}}" />
    <div id="dt-header" style="position: absolute;top: 0;width: 100%;">
        <div class="dt-wrap clr">
            <a id="dt-logo" href="/">堆糖</a>
            <div id="dt-header-right">
                <a id="dt-login" class="dt-head-cat" href="{{url('home/login')}}">登录</a>
                <div class="dt-vline"></div>
                <a id="dt-register" class="dt-btn dt-head-cat" href="{{url('home/register')}}">注册</a>
            </div>
        </div>
    </div>
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
        <div class="tt-s"><span>登录</span><a class="mask-close" target="_self" href="{{url('home/register')}}" onclick="SUGAR.PopOut.closeMask();">关闭</a></div>
        <div class="mask-cont">
            <div id="poplogin" class="win-wraper clr">
                <div class="login clr">
                    <div class="cont">
                        <form id="dt-form-login" method="post" action="{{url('user/login')}}" target="_self">
                            {{csrf_field()}}
                            <div class="dt-unme cnt-i clr">
                                <input type="text" name="login_phone" placeholder="手机号">
                            </div>
                            <div class="dt-pswd cnt-i clr">
                                <input type="password" id="p-password" name="login_pass" placeholder="密码">
                            </div>
                            <div class="dt-ccode cnt-i clr">
                                <input type="text" placeholder="验证码" name="ccode" class="ccode"><img src="" class="dt-ccodepic"></div>
                            <div class="u-chk clr">
                                <input class="dn" name="token" value="">
                                <input class="chk" type="checkbox" name="remember" id="poplogin-rem" value="" checked="">
                                <label for="poplogin-rem">记住我</label><a href="/getpasswd/" class="r">忘记密码？</a></div>
                            <div class="submit clr">
                                <a class="abtn l" href="{{url('home/register')}}" onmousedown="$.G.gaq('/_trc/Login/pop/direct');" id="loginbtn">
                                    <button type="submit" class="pg-loginbtn"><u>登录</u></button>
                                </a>
                            </div>
                        </form>
                        <div class="pg-reg">
                            <a class="qqsite" href="" onmousedown="$.G.gaq('/_trc/Login/pop/connect_qq');">
                                <i class="pg-QQ"></i></a><a class="weibo" href="" onmousedown="$.G.gaq('/_trc/Login/pop/connect_sina');"><i class="pg-weibo"></i></a>
                            <a class="douban" href="" onmousedown="$.G.gaq('/_trc/Login/pop/connect_douban');">
                                <i class="pg-douban"></i></a><a class="taobao" href="" onmousedown="$.G.gaq('/_trc/Login/pop/connec t_taobao');"><i class="pg-taobao"></i></a><a class="qweibo" href="" onmousedown="$.G.gaq('/_trc/Login/pop/connect_qweibo');"><i class="pg-qqweibo"></i></a></div>
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
@endsection
