
@extends('home/master')
@section('title','堆糖生活家--个人专辑详情')
@section('style')
    <link href="{{url('css/album-detail.f84edf77.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('css/lib.558869d2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/lib.8551015b.css')}}">
    <script src="{{url('js/lib.bundle.a6ecd17d.js')}}"></script>
{{--    <script src="{{url('js/albumDetail.0946dd7c.js')}}"></script>--}}
    <style>
        .album-info span{
            color:white;
        }
        .album-share i{
            background:url({{url('images/20140110112106_setrj.png')}}) no-repeat -120px 0px;
        }
        .album-share-list a.sina {
            background:url({{url('images/20140110112106_setrj.png')}}) no-repeat -160px 0px;
        }
        .album-share-list a.qzone {
            background:url({{url('images/20140110112106_setrj.png')}}) no-repeat -200px 0px;
        }
        .album-share-list a.txweibo {
            background:url({{url('images/20140110112106_setrj.png')}}) no-repeat -240px 0px;
        }
        .album-share-list a.douban {
            background:url({{url('images/20140110112106_setrj.png')}}) no-repeat -280px 0px;
        }
        .album-share-list a.renren {
            background:url({{url('images/20140110112106_setrj.png')}}) no-repeat -320px 0px;
        }
        .album-edit a i {
            background:url({{url('images/20140110112106_setrj.png')}}) no-repeat -360px 0px;
        }
        .album-post i{
            background:url({{url('images/20140110112106_setrj.png')}}) no-repeat -80px 0px;
        }
        .album-post:hover{
            background-color: #e03c5a
        }
        #addform .button {
            width: 280px;
            height: 40px;
            line-height: 40px;
            border: 1px solid #cccccc;
            background: #00AFFF;
            border-radius: 3px;
            position: relative;
            left:80px;
            top:20px;
            display: inline-block;
            text-align: center;
            overflow: hidden;
        }
        #addform .file {
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
        #addform .button a{
            font-size:14px;
            font-weight:bold;
            color:white;
        }
        #addform .button a span{
            font-weight:normal;
            font-size:8px;
            line-height: 50px;
        }
        .foreach span a:hover{
            color:red;
            cursor:pointer;
        }
    </style>
@endsection
@section('content')
<div id="content">
    <div class="album-header" style="width: 1200px;margin:0 auto;">
        <!-- 注释了改改改 -->
        <!-- 注释了改改改end -->
        <img class="album-header-bg ohmyblured" src="{{url('images/20170329114618_MmFe2.thumb.1200_280_g.jpeg')}}" style="height:300px;position: relative;">
        <div class="album-header-bg-mask"></div>
        <table class="album-header-info tc">
            <tbody>
            <tr>
                <td>
                    <h1 class="album-title">{{$special['name']}}</h1>
                    <p class="album-info"><span class="album-count">1张图片</span>&nbsp;<b>·</b>&nbsp;<span class="like-count"><i>0</i>人收藏</span></p>
                    <p class="album-desc">
                        {{$special['desc']}}
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="album-header-attr-mask"></div>
        <div class="album-header-attr tc">
            <a class="album-account" href="{{url('user/gopersonal')}}">
                <img class="avatar" src="{{asset('public/').'/'.$head}}">
                <span class="name" style="color:white;">{{Session()->get('username')}}</span>
            </a>
            <div class="album-action dib">
                <a title="发布" id="add" class="album-post" href="javascript:;">
                    <i></i><span style="color:white;font-weight: bold;">发布</span></a>
                <div id="album-share" class="album-share" href="javascript:;">
                    <i></i>
                    <span id="album-share-list" class="album-share-list clr" style="display: none; width: 184px;">
                    <span>分享：</span>
                        <a class="sina" href="http://service.weibo.com/share/share.php?appkey=1152390549&amp;title=%E7%94%9F%E6%B4%BB%EF%BC%8C%E5%8E%BB%E5%A0%86%E7%B3%96%E6%9F%A5%E7%9C%8B%E6%9B%B4%E5%A4%9A%E4%B8%93%E8%BE%91%E2%86%92&amp;pic=https%3A%2F%2Fa-ssl.duitang.com%2Fuploads%2Fitem%2F201703%2F29%2F20170329114618_MmFe2.thumb.400_0.jpeg&amp;url=http%3A%2F%2Fwww.duitang.com%2Falbum%2F%3Fid%3D83320245" title="分享到新浪微博" target="_blank" ></a>
                        <a class="txweibo" href="http://share.v.t.qq.com/index.php?c=share&amp;a=index&amp;url=http%3A%2F%2Fwww.duitang.com%2Falbum%2F%3Fid%3D83320245&amp;title=%E7%94%9F%E6%B4%BB%EF%BC%8C%E5%8E%BB%E5%A0%86%E7%B3%96%E6%9F%A5%E7%9C%8B%E6%9B%B4%E5%A4%9A%E4%B8%93%E8%BE%91%3E%3E%3E&amp;appkey=dad361aadb9948278afc268bd5617307&amp;pic=https%3A%2F%2Fa-ssl.duitang.com%2Fuploads%2Fitem%2F201703%2F29%2F20170329114618_MmFe2.thumb.400_0.jpeg" title="分享到腾讯微博" target="_blank" ></a>
                        <a class="qzone" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http%3A%2F%2Fwww.duitang.com%2Falbum%2F%3Fid%3D83320245&amp;title=%E5%A0%86%E7%B3%96%EF%BC%8D%E4%B8%93%E8%BE%91&amp;summary=%E7%94%9F%E6%B4%BB%EF%BC%8C%E5%8E%BB%E5%A0%86%E7%B3%96%E6%9F%A5%E7%9C%8B%E6%9B%B4%E5%A4%9A%E4%B8%93%E8%BE%91%3E%3E%3E&amp;pics=https%3A%2F%2Fa-ssl.duitang.com%2Fuploads%2Fitem%2F201703%2F29%2F20170329114618_MmFe2.thumb.400_0.jpeg" title="分享到QQ空间" target="_blank" ></a>
                        <a class="douban" href="http://shuo.douban.com/!service/share?image=https%3A%2F%2Fa-ssl.duitang.com%2Fuploads%2Fitem%2F201703%2F29%2F20170329114618_MmFe2.thumb.400_0.jpeg&amp;href=http%3A%2F%2Fwww.duitang.com%2Falbum%2F%3Fid%3D83320245&amp;text=%E7%94%9F%E6%B4%BB%EF%BC%8C%E5%8E%BB%E5%A0%86%E7%B3%96%E6%9F%A5%E7%9C%8B%E6%9B%B4%E5%A4%9A%E4%B8%93%E8%BE%91%3E%3E%3E&amp;name=%E5%A0%86%E7%B3%96%EF%BC%8D%E4%B8%93%E8%BE%91" title="分享到豆瓣" target="_blank" ></a>
                        <a class="renren" href="http://widget.renren.com/dialog/share?resourceUrl=http%3A%2F%2Fwww.duitang.com%2Falbum%2F%3Fid%3D83320245&amp;description=%E7%94%9F%E6%B4%BB%EF%BC%8C%E5%8E%BB%E5%A0%86%E7%B3%96%E6%9F%A5%E7%9C%8B%E6%9B%B4%E5%A4%9A%E4%B8%93%E8%BE%91%3E%3E%3E&amp;title=%E5%A0%86%E7%B3%96%EF%BC%8D%E4%B8%93%E8%BE%91&amp;pic=https%3A%2F%2Fa-ssl.duitang.com%2Fuploads%2Fitem%2F201703%2F29%2F20170329114618_MmFe2.thumb.400_0.jpeg" title="分享到人人网" target="_blank" ></a>
                    </span>
                </div>
            </div>


            <div class="album-tags">
                <span class="tag-legend">标签：</span>
                <span class="tag-area">
<a target="_blank" href="">{{$tag}} </a>
</span>
            </div>
            <div class="dt-vline"></div>
            <div id="album-edit" class="album-edit">
                <a href="javascript:;"><i></i>编辑</a>
            </div>
        </div>
        <div class="album-header-mask dn"></div>
    </div>
    <div class="album-content" style="min-height:500px;">
        {{--<div id="woo-holder" style="height:auto">--}}
            <a name="woo-anchor"></a>
            <div class="albumshowstyle clr dymswitch-0" style="opacity: 1;">
                {{--<a title="列表显示" class="woo-swa cur woo-cur" href="javascript:;">列表展示</a>--}}
                {{--<a title="幻灯片显示" id="albumentr" href="javascript:;" data-albuminfo="{&quot;id&quot;:83320245,&quot;tot&quot;:1}">幻灯播放</a>--}}
                <!-- <a title="专辑评论" class="album-reply" href="javascript:;">专辑评论</a> -->
            </div>
            {{--<div class="woo-swb woo-cur" style="display: block;">--}}
                    <!-- 注释了改改改 -->
                    <div style="min-hetght:600px;width:1200px;margin:0 auto;">
                        @if(empty($detail))
                            <div style="width:600px;margin:0 auto;margin-top:50px;height:300px;">
                                <a style="font-size:36px;color:#a7a7a7;font-weight:bold;line-height:200px;">亲，该专辑空空如也，快去发布吧！</a>
                            </div>
                        @else
                            @foreach($detail as $d)
                                {{--获取单张相片的id--}}
                                <div style="width:250px;height:200px;border:2px dashed #d7d7d7;display:inline-block;margin-left:10px;">
                                    {{--<span class="getdesc" style="display:none;"data=""></span>--}}
                                        <img alt="" src="{{asset('public/').'/'.$d['pics']}}" style="height:125px;width:222px;position:relative;left:15px;top:10px;">
                                    <div style="min-height:50px;"><p style="line-height: 50px;text-align: center;"><a style="color:black;font-weight:bold;">描述：</a>{{$d['desc']}}</p></div>
                                    <div style="height:40px;width:160px;margin:0 auto;margin-top:-10px;" class="foreach">
                                        <span style="float:left;" ><a class="edit" title="{{$d['id']}}" name="{{$d['desc']}}">修改</a></span>
                                        <span style="float:right"><a href="{{url('user/deldetailspecial',['id'=>$d['id']])}}" onclick="if(confirm('确定删除吗?')==false) return false;">删除</a></span>
                                    </div>
                                </div>
                        @endforeach
                        @endif
                                {{--<div class="d">--}}
                                    {{--<span class="d1 dn">0</span>--}}
                                    {{--<span class="d2 dn">0</span>--}}
                                    {{--<span class="d3 dn">0</span>--}}
                                {{--</div>--}}
                                {{--<ul>--}}
                                    {{--<li class="f">--}}
                                        {{--<a target="_blank" href="">--}}
                                            {{--<img width="24" height="24" src="{{asset('public/').'/'.Session()->get('head')}}">--}}
                                        {{--</a>--}}
                                        {{--<p>--}}
                                            {{--<a class="p" target="_blank" href="">{{Session()->get('username')}}}</a>--}}
                                            {{--<br>--}}
                                            {{--<span>发布到&nbsp;<a target="_blank" href="">生活</a></span>--}}
                                        {{--</p>--}}
                                    {{--</li>--}}
                                    <!-- 三条评论 开始 -->
                                    <!-- 三条评论 结束 -->
                                {{--</ul>--}}
                    </div>
                    <!-- 注释了改改改end -->
                </div>
                <div class="woo-pager">
                    <!-- 注释了改改改 -->
                    <!-- 注释了改改改end -->
                    <div class="woo-pbr woo-mpbr"><ul class="woo-dib"><li class="woo-cur">1</li></ul></div></div>
                <script>
                    $('#fordymarea').attr('id','woo-holder').find('div.woo-pcont').addClass('woo-masned').css("height",$(window).height());
                </script>
            </div>
        </div>
</div>
    <div class="album-reply-list dn">
    </div>
</div>
<div id="win-house" class="h0">
    <div id="popalbumdesc">
        {{$special['desc']}}
    </div>
</div>



    {{--个人专辑的编辑--}}
    <div id="popalbumedit" class="win-wraper popalbumedit" style="display:none;position: fixed;top:70px;left:360px;">
        <div class="tt-s">
            <span>编辑专辑</span>
            <a class="mask-close" target="_self" id="closespecial"style="position: relative;left:200px;font-size:12px;cursor:pointer;">关闭</a>
        </div>
        <form id="form-albumedit" method="post" action="{{url('user/editspecial',['id'=>$special['id']])}}">
            {{csrf_field()}}
            <input type="hidden" name="special_id" value="{{$special['id']}}">
            <div class="form-line">
                <div class="form-legend">专辑名*</div>
                <input id="editname" class="ipt" type="text" name="name" maxlength="40" value="{{$special['name']}}">
            </div>
            <div class="form-line">
                <div class="form-legend">描述</div>
                <textarea class="txa" name="desc" maxlength="600" data-optional="1">{{$special['desc']}}
                </textarea>
            </div>
            <div class="form-action dn">
                <a class="abtn l" href="javascript:;" target="_self"><button type="submit"><u>确定</u></button></a>
            </div>
        <div id="contaddarea" class="form-line">
            <div class="clr">
                <div class="form-legend">
                    标签
                </div>
                <div class="form-content">
                        <div class="da tag-sel-cnt tag-use-cnt clr">
                            <input id="mbaddtagipt" class="tagedit" name="tag"  type="text" value="{{$tag}}" maxlength="100" data-optional="true">
                        </div>
                    <div class="tag-use-cnt tag-def-cnt da" id="mbaddtagsel">
                        <a class="user-tags" href="javascript:;">
                            <i class="btni">家居</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">设计</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">插画</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">电影</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">旅行</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">手工</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">女装</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">男装</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">配饰</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">美食</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">摄影</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">艺术</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">封面</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">动漫</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">怀旧</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">街拍</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">小孩</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">宠物</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">植物</i></a><a class="user-tags" href="javascript:;">
                            <i class="btni">人物</i></a>
                    </div>
                </div>
            </div>
        </div>
            <span class="tag-tips">Tips:多个标签用逗号或回车键隔开，最多添加5个标签</span>
        <div class="pop-album-action clr">
            <button type="submit" style="width: 80px;height:40px;background: #22B4F6;position: relative;left:250px;"><a color="white">确定</a></button>
        </div>
    </form>
    </div>


    {{--再次发布自己专辑中的内容--}}
<div class="blockUI blockMsg blockPage" id="show" style="z-index: 9011; display:none;position: fixed; padding: 0px; margin: -185.5px 0px 0px -242px; width: 484px; top: 50%; left: 50%; text-align: left; background: none;">
    <div class="mask-body" style="width: 484px;">
        <div class="tt-s"><span>上传图片</span>
            <a class="mask-close" target="_self" id="close"style="position: relative;left:180px;font-size:12px;cursor:pointer;">关闭</a>
        </div>
        <div style="height:280px;border:2px dashed #d7d7d7">
            <form action="{{url('user/adddetailspecial')}}" method="post" enctype="multipart/form-data" id="addform">
                {{csrf_field()}}
                <input type="hidden" name="special_id" value="{{$special_id}}">
                <span class="button">
                    <a style="color:white;font-weight:bold;">上传图片<span style="font-size:12px;">亲，个人专辑内相片只支持单张上传哦！</span></a>
                 <input type="file" name="pic" id="file" class="file" />
                </span>
                <br><br>
                <p class="desc">
                   <a style="position: relative;top: 50px;left:20px;">描述：</a>
                    <div class="textarea" style="position: relative;left:80px;">
                        <textarea name="desc" maxlength="300" style="width:280px;height: 100px;"></textarea>
                    </div>
                <button type="submit" style="width:80px;height: 40px;background:#00AFFF;position: relative;left:180px;top:20px;"><a>确定上传</a></button>
            </form>
        </div>
    </div>
</div>

{{--编辑专辑内的单张信息--}}
<div class="blockUI blockMsg blockPage" id="openedit" style="z-index: 9011; display:none;position: fixed; padding: 0px; margin: -185.5px 0px 0px -242px; width: 484px; top: 50%; left: 50%; text-align: left; background: none;">
    <div class="mask-body" style="width: 484px;">
        <div class="tt-s"><span>修改专辑详细信息</span>
            <a class="mask-close" target="_self" id="closedetail"style="position: relative;left:150px;font-size:12px;cursor:pointer;">关闭</a>
        </div>
        <div style="height:280px;border:2px dashed #d7d7d7">
            <form action="{{url('user/editdetailspecial')}}" method="post" id="editform">
                {{csrf_field()}}
                {{--获取单张相片的id，然后在js中获取--}}
                <input type="hidden" class="id" name="id"value="">
                <p class="desc">
                    <a style="position: relative;top: 50px;left:20px;">描述：</a>
                <div class="textarea" style="position: relative;left:80px;">
                    <textarea name="desc" class="desc" maxlength="300" style="width:280px;height: 100px;"></textarea>
                </div>
                <button type="submit" style="width:80px;height: 40px;background:#00AFFF;position: relative;left:180px;top:20px;"><a>确定修改</a></button>
            </form>
        </div>
    </div>
</div>

{{--<script src="{{url('js/albumDetail.0946dd7c.js')}}"></script>--}}
<script>
 // 发布专辑详细信息，图片以及描述
 $('#add').click(function(){
    $('#show').css('display','block');
 })
$('#close').click(function(){
    $('#show').css('display','none');

})
</script>

{{--一个专辑内的相片信息的修改，仅仅是描述--}}
<script>
    $('.edit').click(function(){
        $('#openedit').css('display','block');
        var desc=$(this).attr('name');
        var id=$(this).attr('title');
        $('.id').val(id);
        $('.desc').val(desc);
    })
    $('#closedetail').click(function(){
        $('#openedit').css('display','none');
    })
</script>

{{--整个专辑的修改，包括描述，标签等等--}}
<script>
    $('#album-edit').click(function(){
        $('#popalbumedit').css('display','block');
    })
    $('#closespecial').click(function(){
        $('#popalbumedit').css('display','none');
    })

    $('.user-tags .btni').click(function(e) {
        content=''
        content=$('.tagedit').val()+';'+$(this).html();
        $('.tagedit').val(content);
    })
</script>
<script>
        $('#album-share').mouseenter(function() {
            $('#album-share-list').show(300);
        });

    $('#album-share').mouseleave(function(){
        $('#album-share-list').hide(300);
    });
</script>

@endsection