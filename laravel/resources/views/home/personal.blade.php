@extends('home/master')
@section('title','堆糖生活--信息修改页')
@section('style')
    <script src="{{url('js/lib.bundle.a6ecd17d.js')}}"></script>
    <script src="{{url('js/personal.js')}}"></script>
{{--    <script src="{{url('js/checkpass.js')}}"></script>--}}
    <style type="text/css">
        .button {
            width: 80px;
            height: 40px;
            line-height: 40px;
            border: 1px solid #cccccc;
            background: #22B4F6;
            border-radius: 3px;
            position: relative;
            display: inline-block;
            text-align: center;
            overflow: hidden;
        }

        .file {
            filter: alpha(opacity: 0);
            opacity: 0;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            display: block;
            cursor: pointer;
        }
    </style>
@endsection
@section('content')

<div id="content" style="margin-left:200px;">
    <div class="block" id="block">
        <div class="box">
            <h2><a href="">我的堆糖</a>&nbsp;>&nbsp;<a href="javascript:;">账号设置</a>&nbsp;>&nbsp;<a href=""class="changename" id="changename">基本信息</a></h2>
        </div>
        <div class="pb8 set-mt15">
            <ul class="ctr-sw">
                <li data-info="set-info"><a id="info" style="color:red;">基本信息</a><i></i></li>
                <li data-info="set-pwd"><a id="updatepass">修改密码</a><i></i></li>
            </ul>
        </div>
    </div>
    <div class="info-main-area">
        <div class="hset set-info" id="set-info"style="display:block;">
            <div class="block">
                <div class="ps-info-img">
                    <div class="ps-img-d">
                        <a id="myphotoa" href="javascript:;"><img id="defaulthead" height="120" width="120" src=""></a>
                    </div>
                </div>
                <div id="set-uploadhead-holder" class="set-selectpic gray">
                    <div id="default-dec" class="l20">在堆糖大家都是“有头有脸”的朋友，上传头像让大家更快认识您。
                        <br /> 选择喜欢的图片作为您的头像：</div>
                    <div id="view-dec" class="l20 dn">这是您新头像的预览，满意地话就点击保存吧：
                        <br />&nbsp;</div>
                    <div class="pgareaup">
                        {{--<a class="abtn abtn-up dib" href="javascript:;" id="set-uploadhead-btn"><u><i></i>上传头像</u>--}}
                            <form id="form-headimg" method="post" action="{{url('user/head')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{--<input type="file" hidefocus="true" name="img">--}}
                                <input type="hidden" name="user_id" value="{{$user_id}}"/>
                                {{--<iframe name="alupifr" src="about:blank" class="dn" scrolling="no" frameborder="0" height="0" width="0">--}}
                                {{--</iframe><input type="hidden" name="type" value="avatar"/>--}}
                                <span class="button">
                                    <a style="font-size:14px;color:white;"><u>上传头像</u></a>
                                <input type="file" name="img" id="file" class="file" />
                                </span>
                                <span class="button" style="margin-left:20px;">
                                    <a style="font-size:14px;color:white;"><u>确定</u></a>
                                <input type="submit" class="file" value="确定">
                                </span>
                            </form>
                        </a>
                        <div id="set-uploading" class="dib loading3 dn">正在上传</div>
                        <div id="set-uperror" class="dib mt8 ml8 l20 red"></div>
                    </div>
                    <div id="set-uploaded" class="clr dn">
                        <a class="abtn" href="javascript:;" id="set-upsavebtn"><u>保存</u></a><a class="uploadpic-delthepic" href="javascript:;" id="set-cancelupload">取消</a>
                    </div>
                    <div class="clr mt8">
                        <div class="l mt8 gray">
                            可以上传jpg,gif,png格式的图片，且文件小于2M
                        </div>
                    </div>
                </div>
            </div>
            <div class="block brdsep">
                <form id="form-setprofile" action="{{url('user/personinfo')}}" method="post">
                    {{csrf_field()}}
                    <div class="set-baseinfo">
                        <table class="tableform" cellspacing="0" cellpadding="0">
                            <colgroup width="142"></colgroup>
                            <colgroup width="600"></colgroup>
                            <tr>
                                <th>用户名</th>
                                <td><span class="mynick"></span><span id="pg-mynick"></span>
                                    {{--<br /><a id="changePop" class="mr8 redlk lkl" target="_blank">修改昵称</a><span class="gray">(每个月只有一次修改机会哦~)</span>--}}</td>
                            </tr>
                            <tr>
                                <th>性别</th>
                                <td>
                                    <input id="gender-0" class="pg-gender ml8 chk" type="radio" name="sex" value="0" />
                                    <label for="gender-0">女</label>
                                    <input id="gender-1" class="pg-gender ml8 chk" type="radio" name="sex" value="1" />
                                    <label for="gender-1">男</label>
                                </td>
                            </tr>

                            <tr>
                                <th>城市</th>
                                <td id="chinacity-1">
                                    <select id="pro">
                                    </select>
                                    <select id="city">
                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <th>一句话介绍</th>
                                <td class="smltxa">
                                    <div class="pb8">说说你喜欢什么，也可以写上你的新浪微博、豆瓣、个人博客等。</div>
                                    <textarea id="id-short-description" class="txa selfintr" rows="5" cols="40" name="description" valid="自我介绍最多70个字符" maxlength="70"></textarea>
                                    {{--<div id="short-description-check" class="error"></div>--}}
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                <span class="button">
                                    <a style="font-size:14px;color:white;"><u>保存设置</u></a>
                                <input type="submit" class="file" value="保存设置">
                                </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
        <!-- edit_passwd -->
        <form action="{{url('user/setpass')}}" method="post" name="myform">
            {{csrf_field()}}
        <div class="hset set-pwd set-password" id="set-password"style="display:none;">
                <table class="tableform" cellspacing="5" cellpadding="5">
                        <tr>
                           <th>当前密码</th>
                            <td>
                                <input type="password" class="ipt" name="oldpass"/>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <th>新密码</th>
                            <td>
                                <input class="ipt" type="password" name="newpass" id="newpass" /> 密码至少是8位字母加数字</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <th>确认新密码</th>
                            <td>
                                <input class="ipt" type="password" name="renewpass" id="renewpass" />
                            </td>
                            <td class="pswerror" style="color:red">&nbsp;</td>
                        </tr>
                    <tr>
                        <th>验证码</th>
                        <td>
                            <input class="ipt" type="text" placeholder="验证码" name="code" style="position: relative;top:-15px;">
                            <img src="{{captcha_src()}}" alt=""id="code">
                            <span>{{$errors->first('code')}}</span>
                        </td>
                    </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <span class="button">
                                    <a style="font-size:14px;color:white;"><u>保存设置</u></a>
                                <input type="submit" class="file" value="保存设置">
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    var repass=document.getElementById('renewpass');
    repass.onblur=function() {
        var newpass=document.getElementById('newpass').value;
        var renewpass=document.getElementById('renewpass').value;
        if (newpass != renewpass) {
            alert('亲，你输入的两次密码不一致哦，请重新输入吧');
        }
    }
</script>
<div id="footer" class="footer">
    <div class="realfoot footcont">
        <div class="footct graylk">
            <div class="frdlk"><a href="">标签集</a><a id="sitehelp" href="">帮助中心</a><a href="/about/">关于我们</a><a href="/jobs/">加入我们</a><a href="/declare/#noduty">免责声明</a><a class="redlk" href="/about/collectit/">堆糖收集工具</a>
                <a href="http://www.beian.gov.cn/portal/index" class="beian1" target="_blank"></a>
                <a href="http://www.zx110.org/picp/?sn=310105034519" class="beian" target="_blank"></a>
            </div>
            &copy;Copyright by <u class="duitang-slogo">堆糖</u> 2010-2017 duitang.com, all rights reserved 沪ICP备10038086号-3
        </div>
    </div>
</div>
<div id="win-house" class="h0">
    <div class="set-name">
        <form id="form-changename" method="post" action="">
            <div class="set-baseinfo">
                <table class="tableform" cellspacing="0" cellpadding="0">
                    <colgroup width="160"></colgroup>
                    <colgroup width="160"></colgroup>
                    <colgroup width="164"></colgroup>
                    <tr>
                        <th style="font-weight:bold">修改昵称</th>
                        <td>(每个月只有一次修改机会哦~)</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                    <tr>
                        <th>当前昵称</th>
                        <td class="pg-now-name"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th>新昵称</th>
                        <td>
                            <input class="ipt" type="text" name="name" value="" />
                        </td>
                        <td class="changeback">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <div class="clr mt8">
                                <a id="changeUp" class="abtn abtn-w4" target="_self" href="javascript:;"><u>提交</u></a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>
<div id="foot-forms" class="dn">
</div>
<script type="text/javascript">
    var info=document.getElementById('info');
    var updatepass=document.getElementById('updatepass');
    var changename=document.getElementById('changename');
    var div1=document.getElementById('set-info');
    var div2=document.getElementById('set-password');
    info.onclick=function()
    {
        info.style.color='red';
        updatepass.style.color='#5678A0';
        div1.style.display='block';
        div2.style.display='none';
    }
    updatepass.onclick=function()
    {
        console.log(changename.innerHTML);
        changename.innerHTML="修改密码";
        updatepass.style.color='red';
        info.style.color='#5678A0';
        div1.style.display='none';
        div2.style.display='block';
    }
</script>
@endsection