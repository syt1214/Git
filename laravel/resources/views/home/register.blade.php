@extends('home/master')
@section('title','注册')
@section('style')
    <script src="{{asset('js/register.js')}}"></script>
    <script src="{{asset('js/code.js')}}"></script>
@endsection
@section('content')

<div id="content">
    <div class="pg-main">
        <div class="pg-header">
            <div class="pg-head">
                <a class="pg-home" href="/">
                    <img class="pg-logo" src="{{url('images/20150109151228_wzrfg.png')}}" alt="logo" />
                </a>
                <div class="pg-logbtns">
                    <a class="pg-reg active" href="{{url('home/register')}}">注册</a>
                    <span>|</span>
                    <a class="pg-log" href="{{url('home/login')}}">登录</a>
                </div>
            </div>
        </div>
        <div class="pg-content">
            <div class="pg-wrapbox">
                <div class="pg-box clr">
                    <div class="l">
                        <form class="form pg-form-login clr" action="{{url('user/reg')}}" method="post" name="myform" id="reg-form" >
                            {{csrf_field()}}
                            <ul class="pg-infobox l">
                                <li>
                                    <p><input placeholder="用户名" type="text" name="username" id="username"><span id="uspan"></span></p>
                                    <br>
                                    {{--<span class="reg-tips"></span>--}}

                                </li>
                                <li>
                                   <p><input placeholder="密码" type="password" name="password" id='password' /><span id="passspan"></span></p>
                                   <br>
                                    {{--<span class="reg-tips"></span>--}}

                                </li>
                                <li>
                                    <p><input placeholder="邮箱" type="email" name="email" id='email' /><span id="espan"></span></p>
                                    <br>
                                    {{--<span class="reg-tips"></span>--}}

                                </li>
                                <li>
                                    <p><input class="phone_re" id="phone"type="text" name="phone" id="phone" placeholder="手机号" ><span id="pspan"></span></p>
                                    <br>
                                </li>
                                <li>
                                    <input style="width:130px;" class="check_re" type="text" name="checkcode" id="checkcode" placeholder="验证码">
                                    <input class="acq_check" style="width:80px;height:35px;padding-left:20px;cursor:pointer;"value="获取验证码">
                                </li>
                                <li>
                                    <div class="clr u-chk">
                                        <input id="login-rem" class="chk l pg-chb" type="checkbox" name="remember">
                                        <label for="login-rem" class="l">记住我</label>
                                        <a class="pg-fog"style="position: relative;left:100px;" href="/getpasswd/">忘记密码？</a>
                                    </div>
                                    <span class="pg-reg-bottom"></span>
                                </li>
                                <li>
                                    <div class="pg-submits clr">
                                        {{--<a href="javascript:;" >--}}
                                            <input type="submit" class="abtn pg-lgbtn" value="注册">
                                        {{--</a>--}}
                                    </div>
                                </li>
                            </ul>
                        </form>
                        {{--<div class="pg-reg-log">--}}
                            {{--<a class="qqsite" href="/connect/qq/?action=login&next=%2F" onmousedown="$.G.gaq(\'/_trc/Login/pop/connect_qq\');"><i class="pg-QQ"></i></a>--}}
                            {{--<a class="weibo" href="/connect/sina/?action=login&next=%2F" onmousedown="$.G.gaq(\'/_trc/Login/pop/connect_sina\');"><i class="pg-weibo"></i></a>--}}
                            {{--<a class="douban" href="/connect/douban/?action=login&next=%2F" onmousedown="$.G.gaq(\'/_trc/Login/pop/connect_douban\');"><i class="pg-douban"></i></a>--}}
                            {{--<a class="taobao" href="/connect/taobao/?action=login&next=%2F" onmousedown="$.G.gaq(\'/_trc/Login/pop/connec t_taobao\');"><i class="pg-taobao"></i></a>--}}
                            {{--<a class="qweibo" href="/connect/qweibo/?action=login&next=%2F" onmousedown="$.G.gaq(\'/_trc/Login/pop/connect_qweibo\');"><i class="pg-qqweibo"></i></a>--}}
                        {{--</div>--}}
                    </div>
                    <div class="pg-regwrap l clr" style="height:314px;padding:40px 0 14px 130px;">
                        <a href="javascript:;" style="cursor:default;width: 100%;height: 100%;background: none;text-indent: 0;text-align: center;">
                            <img src="{{url('images/20160523143146_uftys.png')}}">
                            <p style="color: #666;margin-top: 24px;font-size: 14px;">扫一扫下载手机客户端</p>
                            <p style="color: #666;font-size: 14px;">浏览体验更佳</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#reg-form").submit(function () {
        var data= $(this).serialize();
        $.ajax({
            url: '{{url('user/reg')}}',
            data: data,
            type: 'post',
            dataType:'json',
            success: function (data) {
               if(data.status!=0)
               {
                   alert(data.message);
                   return;
               }
                location.href = "{{url('home/login')}}";
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

//</script>
@endsection

