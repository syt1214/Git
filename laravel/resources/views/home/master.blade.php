
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta property="wb:webmaster" content="973d669418f79e8b" />
    <title>@yield('title','首页')</title>
    <meta name="keywords" content="堆糖,插画,手工,背景墙,短发发型,时尚生活,lookbook,时尚购" />
    <meta name="description" content="分享收集有关时尚生活的各种图片资讯，手工DIY、插画手绘、美食菜谱、潮流品牌、搭配街拍、美妆发型等等。" />
    <link href="{{'http://www.duitang.com/favicon.ico" rel="SHORTCUT ICON'}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/lib.8551015b.css')}}">
    <link href="{{url('css/login.d1283f99.css')}}" rel="stylesheet" />
    <script src="{{url('js/jquery-1.8.3.min.js')}}"></script>
{{--    <link href="{{url('dist/css/bootstrap.css')}}" rel="stylesheet">--}}
    @yield('style')

</head>
<body>
<div id="header">
    <div id="header-wrap">
        <div id="dt-header">
            <div class="dt-wrap">
                <a id="dt-logo" href="{{url('home/homepage')}}">堆糖</a>
                <div id="dt-nav">
                    <div id="dt-nav-btn-cover"></div>
                    <div id="dt-nav-btn">
                        分类 <i></i>
                    </div>
                    <div id="dt-nav-content-cover"></div>
                    <div id="dt-nav-content" class="clr">
                        <div id="dt-nav-left">
                            <div class="dt-nav-group">
                                <p>
                                    <a href="/">首页</a>
                                </p>
                                <p>
                                    <a id="dt-nav-hot-link" href="">热门</a>
                                </p>
                            </div>
                            <!--                            <div class="dt-nav-group" style="margin-top: -30px;">-->
                            <!--                                <p>-->
                            <!--                                    <a href="">良品购</a>-->
                            <!--                                </p>-->
                            <!--                            </div>-->
                        </div>
                        <div id="dt-nav-right">
                            <div id="dt-nav-right-inner">
                                <div class="dt-nav-group">
                                    <a href="/category/?cat=home">家居生活</a>
                                    <div class="dt-nav-vline"></div>
                                    <a href="/category/?cat=food">美食菜谱</a>
                                    <div class="dt-nav-vline"></div>
                                    <a href="/category/?cat=diy">手工DIY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="dt-nav-neck"></div>
                </div>
                <div id="dt-search">
                    <form action="/search/">
                        <input class="ipt" id="kw" autocomplete="off" name="kw" type="text" placeholder="搜索感兴趣的内容">
                        <input id="type" type="hidden" name="type" value="feed">
                        <button type="submit">搜索</button>
                    </form>
                    <div id="dt-search-list">
                        <div class="dt-search-line">
                            搜索含
                            <span class="red"></span>
                            的内容
                        </div>
                        <div class="dt-search-line">
                            搜索含
                            <span class="red"></span>
                            的商品
                        </div>
                        <div class="dt-search-line">
                            搜索含
                            <span class="red"></span>
                            的专辑
                        </div>
                        <div class="dt-search-line">
                            搜索含
                            <span class="red"></span>
                            的糖人
                        </div>
                    </div>
                </div>
                {{--@section('change')--}}
                @if(empty(session()->get('phone')))
                    <div id="dt-header-right">
                        <div id="dt-ologin" class="dt-has-menu">
                            <div class="dt-ologin-icons">
                                <span class="phone-icon"></span>
                                <a class="for-phone">手机版</a>
                                <i></i>
                                <div class="dt-menu">
                                    <a href="/app/duitang/">
                                        <img src="{{url('images/20160523122327_bzeyw.png')}}">
                                        <p>扫一扫下载手机客户端</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="dt-vline"></div>
                        <a class="dt-head-cat" href="{{url('home/login')}}">登录</a>
                        <div class="dt-vline"></div>
                        <a class="dt-btn dt-head-cat" href="{{url('user/goRegister')}}">注册</a>
                        <div class="dt-vline"></div>
                        <div class="dt-has-menu dt-head-cat">
                            <a class="dt-dreamer-a" href="">堆糖生活家</a>
                            <span class="dt-dreamer">new</span>
                        </div>
                        <div class="dt-vline"></div>
                    </div>
                    @elseif(!empty(session()->get('phone')))
                {{--@section('change')--}}
                    <div id="dt-header-right">
                        <div id="dt-account" class="dt-has-menu dt-head-cat">
                            <a class="dt-account-btn" href="https://www.duitang.com/people/?user_id=14346481">
                                <span>我的堆糖</span> <i></i>
                            </a>
                            <div class="dt-menu">
                                <div class="dt-menu-inner dt-menu-mini">
                                    <a id="mynavtools-home" href="{{url('user/special')}}">
                                        <i></i> 个人主页
                                    </a>
                                    <a id="mynavtools-setting" href="{{url('user/gopersonal')}}">
                                        <i></i> 账号设置
                                    </a>
                                    <div class="dt-menu-bottom">
                                        <a id="mynavtools-logout" href="{{url('user/logout')}}">
                                            <i></i> 退出
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dt-vline"></div>
                        <div id="dt-notification" class="dt-has-menu dt-head-cat">
                            <a class="dt-notification-btn" href="">消息</a>
                            <div class="dt-menu-message dt-co-menu">
                                <div class="dt-menu-inner-notifi">
                                    <div class="dt-menu-inner-nav clr">
                                        <div class="dt-menu-inner-nav-tab tab-highlight">
                                            <span>提醒</span>
                                            <i class="dt-tab-numclean" style="display: none;"></i>
                                            <i class="dt-tab-realnum">0</i>
                                            <p class="dt-tab-hidenum" data-cleanname="blog_forward_count">0</p>
                                            <p class="dt-tab-hidenum" data-cleanname="album_favorite_count">0</p>
                                            <p class="dt-tab-hidenum" data-cleanname="blog_like_count">0</p>
                                            <p class="dt-tab-hidenum" data-cleanname="blog_comment_count">0</p>
                                        </div>
                                        <div class="dt-menu-inner-nav-tab">
                                            <span>共建专辑</span>
                                            <i class="dt-tab-numclean" style="display: none;"></i>
                                            <i class="dt-tab-realnum"></i>
                                        </div>
                                        <div class="dt-menu-inner-nav-tab">
                                            <span>私信</span>
                                            <i class="dt-tab-numclean" style="display: none;"></i>
                                            <i class="dt-tab-realnum">0</i>
                                        </div>
                                        <div class="dt-menu-inner-nav-tab">
                                            <span>好友</span>
                                            <i class="dt-tab-numclean dt-tab-numclean4" data-cleanname="recommend_friend_count" style="display: none;"></i>
                                            <i class="dt-tab-realnum">0</i>
                                        </div>
                                    </div>
                                    <div class="dt-menu-inner-content">
                                        <!-- 提醒 -->
                                        <div class="dt-menu-inner-content-item dt-menu-inner-content-item1">
                                            <ul class="dt-inner-content dt-all"></ul>
                                        </div>
                                        <!-- 共建专辑 -->
                                        <div class="dt-menu-inner-content-item dt-menu-inner-content-item2">
                                            <ul class="dt-inviter"></ul>
                                            <ul class="dt-coalbum"></ul>
                                            <!-- <p class="dt-item2-inviter_num"></p>
    <p class="dt-item2-coalbum_num"></p>
    -->
                                        </div>
                                        <!-- 私信 -->
                                        <div class="dt-menu-inner-content-item dt-menu-inner-content-item3">
                                            <ul class="dt-message"></ul>
                                        </div>
                                        <!-- 好友 -->
                                        <div class="dt-menu-inner-content-item dt-menu-inner-content-item4">
                                            <ul class="dt-friend"></ul>
                                        </div>
                                    </div>
                                    <div class="dt-menu-inner-bottom">
                                        <a class="dt-bottom-location" href="">查看全部消息&gt;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dt-vline"></div>
                        <a class="dt-trend dt-head-cat" href="">关注动态</a>
                        <div class="dt-vline"></div>
                        <div class="dt-has-menu dt-head-cat">
                            <a class="dt-dreamer-a" id="dt-lifer" href="">堆糖生活家</a>
                            <span class="dt-dreamer">new</span>
                        </div>
                        <div class="dt-vline"></div>
                        <div id="dt-add" class="dt-has-menu dt-head-cat">
                            <a class="dt-add-btn" href="">发布</a>
                            <div class="dt-menu">
                                <div class="dt-menu-inner">
                                    <a href="{{url('user/special')}}">
                                        <i style=" background:url({{url('images/20141127151135_edqkk.png')}}) -241px -1px"></i> 上传图片
                                    </a>
                                    <a href="">
                                        <i style="background:url({{url('images/20141127151135_edqkk.png')}}) -211px -1px"></i> 抓取网页图片
                                    </a>
                                    <a href="{{url('user/special')}}">
                                        <i style="background:url({{url('images/20141127151135_edqkk.png')}}) -271px -1px"></i> 创建专辑
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--@endsection--}}
                    @endif
            </div>
        </div>
    </div>
</div>
        @yield('content')
<div id="footer" class="footeridx">
    <div class="dt-wrap oh">
        <div class="dt-span-list clr">
            <div class="dt-footer-span oh">
                <div class="dt-footer-span-inner">
                    <div class="dt-footer-span-title">
                        关于我们
                    </div>
                    <div class="dt-footer-span-items">
                        <a target="_blank" href="">
                            关于我们
                        </a>
                        <a target="_blank" href="">
                            帮助中心
                        </a>
                        <a target="_blank" href="">
                            加入我们
                        </a>
                        <a target="_blank" href="">
                            堆糖收集工具
                        </a>
                        <a target="_blank" href="">
                            联系我们
                        </a>
                        <a target="_blank" href="">
                            标签集
                        </a>
                        <a target="_blank" href="">
                            商务合作
                        </a>
                        <a target="_blank" href="">
                            免责声明
                        </a>
                    </div>
                </div>
            </div>
            <div class="dt-footer-span oh">
                <div class="dt-footer-span-inner">
                    <div class="dt-footer-span-title">
                        手机应用
                    </div>
                    <div class="dt-footer-span-items">
                        <a target="_blank" href="/app/duitang/">
                            堆糖客户端
                        </a>
                        <a target="_blank" href="/app/duitang/#buttom">
                            爱疯了壁纸
                        </a>
                        <a target="_blank" href="/app/duitang/#buttom">
                            堆糖良品购
                        </a>
                    </div>
                </div>
            </div>
            <div class="dt-footer-span dt-footer-center oh tc">
                <div class="dt-footer-span-inner">
                    <div class="dt-tcode">
                        <img style="width: 100%;" src="{{url('images/20160506140111_ycqzr.png')}}">
                    </div>
                    <p>扫描二维码</p>
                    <p>下载堆糖手机客户端</p>
                </div>
            </div>
            <div class="dt-footer-span oh">
                <div class="dt-footer-span-inner">
                    <div class="dt-footer-span-title">
                        关注我们
                    </div>
                    <div class="dt-footer-span-items">
                        <a href="http://weibo.com/duitang/" target="_blank">
                            新浪微博
                        </a>
                        <a class="wxlink" href="javascript:;">
                            微信
                        </a>
                    </div>
                </div>
            </div>
            <div class="dt-footer-span oh">
                <div class="dt-footer-span-inner">
                    <div class="dt-footer-span-title">
                        友情链接
                    </div>
                    <div class="dt-footer-span-items">
                        <a href="" target="_blank">
                            爱物网
                        </a>
                        <a href="" target="_blank">
                            东方女性网
                        </a>
                        <a href="" target="_blank">
                            肉丁网
                        </a>
                        <a href="" target="_blank">
                            LADYMAX时尚
                        </a>
                        <a href="" target="_blank">
                            美食美酒网
                        </a>
                        <a href="" target="_blank">
                            携程攻略
                        </a>
                        <a href="" target="_blank">
                            传导体招聘
                        </a>
                        <a href="" target="_blank">
                            更多..
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="dt-footer-bottom">
<span>
©2017 duitang.com 版权所有。沪ICP备10038086号-3
</span>
            <a class="zhengxin" target="_blank" href="http://www.zx110.org/"></a>
            <a href="http://www.beian.gov.cn/portal/index" class="beian1" target="_blank"></a>
            <a href="http://si.trustutn.org/info?sn=210160914024130570047&certType=1" class="beian2" target="_blank"></a>
        </div>
    </div>
    <a class="txt" href="/mblogdetails/index.html">索引</a></div>
<div id="win-house" class="h0">
</div>
<div id="foot-forms" class="dn">
    <form id="woo-form-hot" action="/napi/index/hot/" >
        <input type="hidden" value="top_comments,is_root,source_link,item,buyable,root_id,status,like_count,sender,album,like_id,favorite_blog_id" name="include_fields">
        <input type="hidden" value="24" name="limit">
        <input class="dn" type="checkbox" name="buyable" value="1" />
    </form>
</div>
</body>
</html>
