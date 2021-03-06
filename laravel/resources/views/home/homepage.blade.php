@extends('home/master')
@section('title','堆糖，美好生活研究所')
@section('style')
<link href="{{url('css/index.5445dff6.css')}}" rel="stylesheet" />
<script src="{{url('js/lib.bundle.a6ecd17d.js')}}" ></script>
@endsection
@section('content')
<div id="header">
    <div id="header-wrap">
        <div id="dt-header">
            <div class="dt-wrap">
                <a id="dt-logo" href="/">堆糖</a>
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
                    <a class="dt-head-cat" href="">登录</a>
                    <div class="dt-vline"></div>
                    <a class="dt-btn dt-head-cat" href="">注册</a>
                    <div class="dt-vline"></div>
                    <div class="dt-has-menu dt-head-cat">
                        <a class="dt-dreamer-a" href="" onmousedown="$.G.hmt('/lifeartist/home_top_entrance/')">堆糖生活家</a>
                        <span class="dt-dreamer">new</span>
                    </div>
                    <div class="dt-vline"></div>
                </div>
            </div>
        </div>
        <div id="dt-header-btm"></div>
    </div></div>
<div id="content">
    <div class="dt-wrap">
        <div id="dt-top" class="clr">
            <div id="dt-top-inner">
                <div class="l pg-fscleft">
                    <div id="dt-carousel">
                        <div class="dt-carousel-content clr" style="width: 500%;">
                            <div class="dt-carousel-item cur">
                                <a target="_blank" href="" class="dt-carousel-img" data-src="{{url('images/20170321154308_kxy52.thumb.710_443_c.jpeg')}}" style="background:url({{url('images/20170321154308_Kxy52.thumb.710_443_c.jpeg')}})"></a>
                                <span class="dt-carousel-title">
<span class="dt-carousel-lstitle">
长腿小秘诀，花式露脚背
</span>
<span class="dt-carousel-stitle">by 夏茵</span>
</span>
                            </div>
                            <div class="dt-carousel-item">
                                <a target="_blank" href="" class="dt-carousel-img" data-src="{{url('20170321112119_aSsPk.thumb.710_443_c.jpeg')}}" ></a>
                                <span class="dt-carousel-title">
<span class="dt-carousel-lstitle">
亮色当道，就是要吸睛
</span>
<span class="dt-carousel-stitle">by 郑南音</span>
</span>
                            </div>
                            <div class="dt-carousel-item">
                                <a target="_blank" href="" class="dt-carousel-img" data-src="{{url('20170320113726_NzVFe.thumb.710_443_c.jpeg')}}" ></a>
                                <span class="dt-carousel-title">
<span class="dt-carousel-lstitle">
一条万用丝巾的时尚自白
</span>
<span class="dt-carousel-stitle">by 下不了海的渔夫</span>
</span>
                            </div>
                            <div class="dt-carousel-item">
                                <a target="_blank" href="" class="dt-carousel-img" data-src="{{url('20170316121934_aACwT.thumb.710_443_c.jpeg')}}" ></a>
                                <span class="dt-carousel-title">
<span class="dt-carousel-lstitle">
一年之计在于春，穿搭也要新体验
</span>
<span class="dt-carousel-stitle">by 占秋</span>
</span>
                            </div>
                            <div class="dt-carousel-item">
                                <a target="_blank" href="" class="dt-carousel-img" data-src="{{url('20170314144744_rYCiL.thumb.710_443_c.jpeg')}}" ></a>
                                <span class="dt-carousel-title">
<span class="dt-carousel-lstitle">
轻装出游，选对包包很重要
</span>
<span class="dt-carousel-stitle">by cold</span>
</span>
                            </div>
                        </div>
                        <div class="dt-carousel-action-wrap">
                            <div class="dt-carousel-action-mask"></div>
                            <div class="dt-carousel-action clr">
                                <div class="dt-carousel-action-title">
<span class="dt-carousel-lstitle">
长腿小秘诀，花式露脚背
</span>
                                    <span class="dt-carousel-stitle">by 夏茵</span>
                                </div>
                                <div class="dt-carousel-points">
                                    <div class="dt-carousel-point cur"></div>
                                    <div class="dt-carousel-point"></div>
                                    <div class="dt-carousel-point"></div>
                                    <div class="dt-carousel-point"></div>
                                    <div class="dt-carousel-point"></div>
                                </div>
                            </div>
                        </div>
                        <div class="dt-carousel-action-left"><i></i></div>
                        <div class="dt-carousel-action-right"><i></i></div>
                    </div>
                </div>
                <div class="r pg-fscright">
                    <div id="dt-hot">
                        <h3>社区热点</h3>
                        <div class="dt-span dt-tags oh">
                            <div class="dt-span-sline clr">
                                <div class="dt-tag">
                                    <a target="_blank" href="">冬天</a>
                                </div>
                                <div class="dt-tag">
                                    <a target="_blank" href="">把生活过成一首诗</a>
                                </div>
                                <div class="dt-tag">
                                    <a target="_blank" href="">早餐</a>
                                </div>
                                <div class="dt-tag">
                                    <a target="_blank" href="">记下时间走过的路</a>
                                </div>
                                <div class="dt-tag">
                                    <a target="_blank" href="">穿搭</a>
                                </div>
                                <div class="dt-tag">
                                    <a target="_blank" href="">家居</a>
                                </div>
                                <div class="dt-tag">
                                    <a target="_blank" href="">原创</a>
                                </div>
                            </div>
                        </div>
                        <div class="dt-span">
                            <div class="dt-span-line clr">
                                <a target="_blank" href="">
                                    『人气连衣裙精选』 大合集
                                </a>
                                <a target="_blank" class="dt-label choice" href="">精选</a>
                            </div>
                        </div>
                        <div class="dt-span dt-app-tag">
                            <div class="dt-span-line sm">
<span class="dt-hot-stitle">
收图小助手:
</span>
                                <a target="_blank" href="">堆糖收集工具</a>
                            </div>
                        </div>
                    </div>
                    <div id="pg-appdload"><a href="" target="_blank">app下载</a></div>
                </div>
            </div>
        </div>
        <div id="dt-center" class="clr">
            <div class="dt-block">
                <div class="pg-ttentry r">
                    <a target="_blank" class="pg-blue-btn" href="">往期回顾 &gt;</a>
                </div>
                <h2>专辑精选</h2>
                <div class="dt-album oh">
                    <div class="section" data-id="83086767">
                        <div class="section-img">
                            <img src="../picture/20170314114638_zm3aj.thumb.224_224_c_2.jpeg">
                            <a target="_blank" class="dt-img-cover" href="/album/?id=83086767"></a>
                        </div>
                        <div class="section-desc">
                            <a target="_blank" class="section-title" href="/album/?id=83086767">
                                拯救下雨天，带来好心情！
                            </a>
                            <div class="section-attr">
                                <p>
                                    70张图片 <b>·</b> 1568人收藏
                                </p>
                                <p>
                                    by <a target="_blank" class="dt-username" href="/people/?user_id=815670">Miss天然卷</a>
                                </p>
                            </div>
                            <div class="section-bottom-a"></div>
                            <div class="section-bottom-b"></div>
                        </div>
                    </div>
                    <div class="section" data-id="83076995">
                        <div class="section-img">
                            <img src="../picture/20170313183339_wzwrt.thumb.224_224_c_2.jpeg">
                            <a target="_blank" class="dt-img-cover" href="/album/?id=83076995"></a>
                        </div>
                        <div class="section-desc">
                            <a target="_blank" class="section-title" href="/album/?id=83076995">
                                在春天，没有什么是一件衬衫解决不了的
                            </a>
                            <div class="section-attr">
                                <p>
                                    70张图片 <b>·</b> 1563人收藏
                                </p>
                                <p>
                                    by <a target="_blank" class="dt-username" href="/people/?user_id=14121064">Moollly</a>
                                </p>
                            </div>
                            <div class="section-bottom-a"></div>
                            <div class="section-bottom-b"></div>
                        </div>
                    </div>
                    <div class="section" data-id="83075401">
                        <div class="section-img">
                            <img src="../picture/20170314114841_sd5af.thumb.224_224_c_2.jpeg">
                            <a target="_blank" class="dt-img-cover" href="/album/?id=83075401"></a>
                        </div>
                        <div class="section-desc">
                            <a target="_blank" class="section-title" href="/album/?id=83075401">
                                一件内搭，造型从春凹到秋
                            </a>
                            <div class="section-attr">
                                <p>
                                    72张图片 <b>·</b> 1589人收藏
                                </p>
                                <p>
                                    by <a target="_blank" class="dt-username" href="/people/?user_id=815655">郑南音</a>
                                </p>
                            </div>
                            <div class="section-bottom-a"></div>
                            <div class="section-bottom-b"></div>
                        </div>
                    </div>
                    <div class="section" data-id="82978304">
                        <div class="section-img">
                            <img src="../picture/20170309111250_ucrac.thumb.224_224_c_2.jpeg">
                            <a target="_blank" class="dt-img-cover" href="/album/?id=82978304"></a>
                        </div>
                        <div class="section-desc">
                            <a target="_blank" class="section-title" href="/album/?id=82978304">
                                你只要知道可以这么搭配就好了
                            </a>
                            <div class="section-attr">
                                <p>
                                    74张图片 <b>·</b> 1439人收藏
                                </p>
                                <p>
                                    by <a target="_blank" class="dt-username" href="/people/?user_id=84483">占秋</a>
                                </p>
                            </div>
                            <div class="section-bottom-a"></div>
                            <div class="section-bottom-b"></div>
                        </div>
                    </div>
                    <div class="section" data-id="83002723">
                        <div class="section-img">
                            <img src="../picture/20170309145522_swacl.thumb.224_224_c_2.jpeg">
                            <a target="_blank" class="dt-img-cover" href="/album/?id=83002723"></a>
                        </div>
                        <div class="section-desc">
                            <a target="_blank" class="section-title" href="/album/?id=83002723">
                                今年的流行鞋款提前get！
                            </a>
                            <div class="section-attr">
                                <p>
                                    63张图片 <b>·</b> 1295人收藏
                                </p>
                                <p>
                                    by <a target="_blank" class="dt-username" href="/people/?user_id=14121064">Moollly</a>
                                </p>
                            </div>
                            <div class="section-bottom-a"></div>
                            <div class="section-bottom-b"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dt-block">
                <div class="pg-tmentry r pg-gray-link">
                    <span>良品购：</span><a href="/shopping/?from=home" target="_blank">全部</a><a href="/shopping/?cat=1&from=home" target="_blank">上衣</a><a href="/shopping/?cat=2&from=home" target="_blank">裙裤</a><a href="/shopping/?cat=3&from=home" target="_blank">配饰</a><a href="/shopping/?cat=4&from=home" target="_blank">鞋子</a><a href="/shopping/?cat=5&from=home" target="_blank">包袋</a><a href="/shopping/?cat=6&from=home" target="_blank">日杂</a>
                </div>
                <h2>单品推荐<a href="/badge/category/user/?tag=全部" target="_blank" class="dt-sblnk" ></a></h2>
                <div class="dt-woo-list oh">
                    <div class="dt-woo-list-inner">
                        <div class="dt-woo dt-woo-0">
                            <a target="_blank" class="dt-woo-img">
                                <img src="../picture/20170316140014_xavtk.thumb.224_224_c_2.jpeg">
                            </a>
                            <a target="_blank" class="dt-img-cover" href="https://www.duitang.com/shopping/?cat=1&amp;sub=%E8%89%AF%E5%93%81%E8%B4%AD_%E8%96%84%E5%A4%96%E5%A5%97"></a>
                            <div class="dt-woo-desc">
                                <p class="dt-woo-title">
                                    <a target="_blank" href="https://www.duitang.com/shopping/?cat=1&amp;sub=%E8%89%AF%E5%93%81%E8%B4%AD_%E8%96%84%E5%A4%96%E5%A5%97">衬衫</a>
                                </p>
                                <p class="dt-woo-attr">
                                    18325人在逛
                                </p>
                                <a target="_blank" href="/shopping/?from=home" class="dt-woo-cat">
                                    良品购
                                </a>
                            </div>
                        </div>
                        <div class="dt-woo dt-woo-1">
                            <a target="_blank" class="dt-woo-img">
                                <img src="../picture/20170316130047_xgh5s.thumb.224_224_c_2.jpeg">
                            </a>
                            <a target="_blank" class="dt-img-cover" href="https://www.duitang.com/shopping/?cat=2&amp;sub=%E8%89%AF%E5%93%81%E8%B4%AD_%E9%95%BF%E8%A3%99"></a>
                            <div class="dt-woo-desc">
                                <p class="dt-woo-title">
                                    <a target="_blank" href="https://www.duitang.com/shopping/?cat=2&amp;sub=%E8%89%AF%E5%93%81%E8%B4%AD_%E9%95%BF%E8%A3%99">半身裙</a>
                                </p>
                                <p class="dt-woo-attr">
                                    18302人在逛
                                </p>
                                <a target="_blank" href="/shopping/?from=home" class="dt-woo-cat">
                                    良品购
                                </a>
                            </div>
                        </div>
                        <div class="dt-woo dt-woo-2">
                            <a target="_blank" class="dt-woo-img">
                                <img src="../picture/20170316002900_fagcq.thumb.224_224_c_2.jpeg">
                            </a>
                            <a target="_blank" class="dt-img-cover" href="https://www.duitang.com/shopping/?cat=4&amp;sub=%E8%89%AF%E5%93%81%E8%B4%AD_%E5%B8%86%E5%B8%83%E9%9E%8B"></a>
                            <div class="dt-woo-desc">
                                <p class="dt-woo-title">
                                    <a target="_blank" href="https://www.duitang.com/shopping/?cat=4&amp;sub=%E8%89%AF%E5%93%81%E8%B4%AD_%E5%B8%86%E5%B8%83%E9%9E%8B">帆布鞋</a>
                                </p>
                                <p class="dt-woo-attr">
                                    18618人在逛
                                </p>
                                <a target="_blank" href="/shopping/?from=home" class="dt-woo-cat">
                                    良品购
                                </a>
                            </div>
                        </div>
                        <div class="dt-woo dt-woo-3">
                            <a target="_blank" class="dt-woo-img">
                                <img src="../picture/20170316030153_tywwn.thumb.224_224_c_2.jpeg">
                            </a>
                            <a target="_blank" class="dt-img-cover" href="https://www.duitang.com/shopping/?cat=3&amp;sub=%E8%89%AF%E5%93%81%E8%B4%AD_%E6%89%8B%E9%95%AF"></a>
                            <div class="dt-woo-desc">
                                <p class="dt-woo-title">
                                    <a target="_blank" href="https://www.duitang.com/shopping/?cat=3&amp;sub=%E8%89%AF%E5%93%81%E8%B4%AD_%E6%89%8B%E9%95%AF">手镯</a>
                                </p>
                                <p class="dt-woo-attr">
                                    18725人在逛
                                </p>
                                <a target="_blank" href="/shopping/?from=home" class="dt-woo-cat">
                                    良品购
                                </a>
                            </div>
                        </div>
                        <div class="dt-woo dt-woo-4">
                            <a target="_blank" class="dt-woo-img">
                                <img src="../picture/20170316041132_8unnx.thumb.224_224_c_2.jpeg">
                            </a>
                            <a target="_blank" class="dt-img-cover" href="https://www.duitang.com/shopping/?cat=6&amp;sub=%E8%89%AF%E5%93%81%E8%B4%AD_%E6%94%B6%E7%BA%B3"></a>
                            <div class="dt-woo-desc">
                                <p class="dt-woo-title">
                                    <a target="_blank" href="https://www.duitang.com/shopping/?cat=6&amp;sub=%E8%89%AF%E5%93%81%E8%B4%AD_%E6%94%B6%E7%BA%B3">托盘</a>
                                </p>
                                <p class="dt-woo-attr">
                                    18653人在逛
                                </p>
                                <a target="_blank" href="/shopping/?from=home" class="dt-woo-cat">
                                    良品购
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dt-block dt-daren">
                <div class="pg-ttentry r">
                    <a target="_blank" class="pg-blue-btn" href="/badge/category/user/?tag=%E5%85%A8%E9%83%A8">更多达人 &gt;</a>
                </div>
                <h2>达人推荐<a href="/badge/category/user/?tag=全部" target="_blank" class="dt-sblnk" ></a></h2>
                <div class="dt-album dt-albumrv oh">
                </div>
            </div>
            <div class="dt-block">
                <h2>大家正在逛</h2>
            </div>
        </div>
    </div>
    <div id="fordymarea">
        <a name="woo-anchor" class="woo-swa"></a>
        <div class="woo-swb">
            <div class="woo-pcont stpics clr" data-wootemp="4" data-subpagenum="1" data-totalunits="24" >
            </div>
            <div class="woo-pager">
            </div>
            <script>
                $('#fordymarea').attr('id','woo-holder').find('div.woo-pcont').addClass('woo-masned')
            </script>
        </div>
    </div>
    <div id="dt-woomore">
        <a class="dt-pg-btn" href="">浏览更多 ></a>
    </div>
</div>
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
                        <img style="width: 100%;" src="../picture/20160506140111_ycqzr_2.png">
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
<!--<script type="text/x-handlebars-template" id="daren-tmpl">
{{--    {{#each object_list}}--}}
{{--    <div class="section" data-id="{{username}}">--}}
        <div class="daren-img">
            <img class="daren-bkg" data-src="../picture/89de0907d97b4e84ba5afdc12487e0ea.gif">
            {{--<a target="_blank" class="daren-img-cover" href="/people/?user_id={{id}}"></a>--}}
            {{--<a target="_blank" href="/people/?user_id={{id}}">--}}
                <img class="daren-avatar" src="../picture/a10d9e8f0bda45368561fab4cf8cbb62.gif"/>
{{--                {{#ifCond isIdentity '==' true}}--}}
                <img class="daren-avatar-v" src="../picture/20151221104639_zibkn_2.png"></a>
            {{--{{/ifCond}}--}}
        </div>
        <div class="daren-desc">
            {{--<a target="_blank" class="daren-title" href="/people/?user_id={{id}}">--}}
{{--                {{username}}--}}
            </a>
            <p class="daren-collect-count">
                <span class="daren-star"> </span>
{{--                <span class="daren-count-total">{{score}}</span>--}}
            </p>
            {{--<p class="daren-expertise">擅长领域: <b>{{tags}}</b></p>--}}
        </div>
    </div>
{{--    {{/each}}--}}
</script>-->
<script src="../js/index.a7354aa4_2.js" ></script>
@endsection