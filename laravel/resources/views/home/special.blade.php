
@extends('home/master')
@section('title','堆糖生活家--个人专辑')
@section('style')
    <link rel="stylesheet" href="{{url('css/detail.5b474624.css')}}">
{{--    <script src="{{url('js/lib.bundle.a6ecd17d.js')}}"></script>--}}
@endsection
@section('content')
<div id="content">
    <div class="layer layer-full oh">
        <div class="tube">
            <div class="block blockmb" style="position: relative;left:80px;">
                <div class="people-header">
                    <div class="people-header-left">
                        <img class="header-bg" src="{{url('images/20140120183953_582KV.thumb.712_356_g.jpeg')}}">
                        <div class="header-bg-mask"></div>
                        <table>
                            <tbody>
                            <tr>
                                <td class="people-info">
                                    <a class="people-avatar" href="">
                                        <img src="{{asset('public/').'/'.Session()->get('head')}}">
                                    </a>
                                    <div class="people-name">
                                        <a href="">
                                            {{Session()->get('username')}}
                                        </a>
                                    </div>
                                    <div class="people-meta">
                                        <span>★ 0</span>
                                    </div>
                                    <div class="people-funs">
                                        <a target="_blank" href="">关注<u> 12 </u></a>
                                        <a target="_blank" href="">粉丝<u> 0 </u></a>
                                    </div>
                                    <div class="people-desc">
                                    </div>
                                    <div class="people-social">
                                    </div>
                                    <div class="people-action">
                                        <div class="people-edit">
                                            <div class="people-edit-bg"></div>
                                            <a target="_blank" class="people-edit-btn" href=""><i></i>编辑</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="people-header-right">
                        <img class="header-bg" src="{{url('images/20140120183953_582KV.thumb.712_356_c.jpeg')}}">
                        <div class="header-bg-mask"></div>
                    </div>
                    <div class="reply-addpic header-bg-change">
                        <div class="header-bg-change-bg"></div>
                        <a class="abtn-up dib header-bg-change-btn" href="javascript:;" id="reply-addpic-btn">修改封面
                            <form class="form-reply-uppic" target="alupifr" enctype="multipart/form-data" method="POST" action="">
                                <input name="img" hidefocus="true" type="file">
                                <input type="hidden" name="tid" value="">
                                <input type="hidden" name="callback" value="">
                                <iframe name="alupifr" src="" class="dn" scrolling="no" frameborder="0" height="0" width="0"></iframe>
                                <input type="hidden" name="type" value="reply">
                            </form>
                        </a>
                        <div class="reply-normal dib gray ml8 l20"></div>
                        <div class="reply-uploading dib loading3 dn"></div>
                        <div class="reply-uperror dib ml8 l20 red dn"></div>
                        <div class="reply-uploaded dib ml8 l20 dn"></div>
                    </div>
                </div> </div>
            <div id="woo-holder">
                <a name="woo-anchor"></a>
                <div class="preview-action clr">
                    <div class="preview-slider-wrap">
                        <a class="preview-min" href="javascript:;"></a>
                        <div class="preview-slider">
                            <a href="javascript:;"></a>
                        </div>
                        <a class="preview-max" href="javascript:;"></a>
                    </div>
                    <a class="preview-ok btn-blue" href="javascript:;">确定</a>
                    <a class="preview-cancel btn-gray" href="javascript:;">取消</a>
                </div>
                <div id="dymnav" class="nav-wrap people-nav-wrap">
                    <ul class="people-nav clr dymswitch-0">
                        <li class="woo-swa woo-cur">
                            <a href="javascript:;">专辑<u> 1 </u>
                            </a>
                        </li>
                        <li class="woo-swa">
                            <a href="javascript:;">文章<u> 0 </u></a>
                        </li>
                        <li class="woo-swa">
                            <a href="javascript:;">收藏的专辑<u> 0</u></a>
                        </li>
                        <li class="woo-swa"><a href="javascript:;">收集的图片<u> 1 </u></a></li>
                        <li class="woo-swa">
                            <a href="javascript:;">发布的图片<u> 1</u></a>
                        </li>
                    </ul>
                    <div class="nav-bottom">
                        <div class="nav-bottom-span" style="display: block; left: 286px; width: 100px; opacity: 1;"></div>
                    </div>
                </div>
                <div class="woo-swb woo-cur" style="display: block;">
                    <div class="woo-tmpmasn woo-pcont nomyname dt-xitems clr woo-masned" style="position:relative;height:0;overflow:hidden;margin:0;padding:0;"></div>
                    <div class="woo-pcont nomyname dt-xitems clr woo-masned" data-wootemp="7" data-totalunits="1" data-sink=".add-album" data-sinkheight="358" data-sinkright="false" style="position: relative; width: 1200px; visibility: visible; height: 358px;">
                        <div class="woo woo-f co0" data-ht="358" data-idx="0" style="position:absolute;overflow:hidden;top:0px;left:0px;width:224px;"><a class="createalbum-pp tc add-album" id="createalbum-pp" href="javascript:;">
                                <div class="smbg" id="createbtn" style="width:220px;height:290px;border:2px dashed #D7D7D7;background:#F5F5F5;">
                                    <div style="position: relative;top:80px;">
                                        <img src="{{url('images/20170329160433.jpg')}}">
                                    </div>
                                </div>
                                <span>创建专辑</span>
                            </a></div>
                           @foreach($allspecial as $all)
                             <div class="woo co1" data-id="83320245" data-idx="1" style="top:0px;left:244px;">
                                 <div class="dt-xitem-img">
                                   {{--<img alt="生活" src="{{asset('public/').'/'.$all['pic']}}">--}}
                                 <a href="" class="dt-xitem-icv" target="_blank">
                                    <img alt="生活" src="{{asset('public/').'/'.$all['pic']}}">
{{--                                     <p>{{$all['desc']}}</p>--}}
                                 </a>
                                </div>
                                 <div class="dt-xitem-desc">
                                  <div class="dt-xitem-title">
                                    <a target="_blank" href="">{{$all['name']}}</a>
                                      <a href='{{url('user/delspecial',['id'=>$all['id']])}}' onclick="if(confirm('确定删除吗?')==false) return false;"style="float:right;font-size:12px;font-weight:normal;font-family:微软雅黑;">删除专辑</a>
                                  </div>
                                <div class="dt-xitem-attr">
                                    {{--<p>--class="dt-xitem-user"}}
                                        {{--1张图片 <b>·</b> 0人收藏--}}
                                    {{--</p>--}}
                                    <p style="font-size:14px;display:none;">by <a target="_blank" href=""style="font-size:12px;">{{Session()->get('username')}}</a></p>
                                </div>
                                     <div>
                                         <div class="dt-xitem-bt1"></div>
                                         <div class="dt-xitem-bt2"></div>
                                     </div>
                              </div>
                        @endforeach
                           </div>
                            {{--<div class="dt-xitem-bt1"></div>--}}
                            {{--<div class="dt-xitem-bt2"></div>--}}
                    </div>
                    <div class="woo co2" data-id="83114392" data-idx="2" style="top:0px;left:488px;">
                        {{--<div class="dt-xitem-img">--}}
                                {{--<img alt="默认专辑" src="{{url('images/20140124115823_HJydi.thumb.224_224_c.png')}}">--}}
                                {{--<a href="" class="dt-xitem-icv" target="_blank"></a>--}}
                        {{--</div>--}}
                        {{--<div class="dt-xitem-desc">--}}
                                {{--<div class="dt-xitem-title">--}}
                                    {{--<a target="_blank" href="">默认专辑</a>--}}
                                {{--</div>--}}
                                {{--<div class="dt-xitem-attr">--}}
                                    {{--<p>--}}
                                        {{--0张图片 <b>·</b> 0人收藏--}}
                                    {{--</p>--}}
                                    {{--<p class="dt-xitem-user">by <a target="_blank" href="">{{Session()->get('username')}}</a></p>--}}
                                {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="dt-xitem-bt1"></div>--}}
                        {{--<div class="dt-xitem-bt2"></div>--}}
                    </div>
                </div>
                    <div class="woo-pager" style="display: block; height: auto;">
                        <div class="woo-pbr woo-mpbr">
                            <ul class="woo-dib">
                                <li class="woo-cur">1</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="blockUI blockMsg blockPage" id="create"style="z-index: 9011; position: fixed; padding: 0px; margin: -156px 0px 0px -330px; width: 660px; top: 50%; left: 50%; text-align: left; color: rgb(0, 0, 0); border: none; height: 272px; background: none;display:none;">
    <div class="mask-body" style="width: 660px;">
        <div class="tt-s"><span>创建专辑</span><a class="mask-close" id="close"target="_self" href="javascript:;" >关闭</a></div>
        <div class="mask-cont">
            <div id="popcreatealbum" class="popcreatealbum">
                <form id="createalbum" method="post" action="{{url('user/create')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <table cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <td width="60" align="right">专辑名</td>
                            <td>
                                <input class="ipt" type="text" name="name" id="name"  maxlength="40">
                                <span id="nspan"></span>
                            </td>
                            <td rowspan="4">
                                <h6>常用标签</h6>
                                <div class="usetag da" id="popal-mbaddtagsel">
                                    <a href="#" class="add">家居</a><a href="#" class="add">设计</a>
                                    <a href="#" class="add">插画</a>
                                    <a href="#" class="add">电影</a>
                                    <a href="#" class="add">旅行</a>
                                    <a href="#" class="add">手工</a>
                                    <a href="#" class="add">女装</a>
                                    <a href="#" class="add">男装</a>
                                    <a href="#" class="add">配饰</a>
                                    <a href="#" class="add">美食</a>
                                    <a href="#" class="add">摄影</a>
                                    <a href="#" class="add">艺术</a>
                                    <a href="#"class="add">封面</a><a href="#"class="add">动漫</a>
                                    <a href="#"class="add">怀旧</a><a href="#"class="add">街拍</a>
                                    <a href="#"class="add">小孩</a><a href="#"class="add">宠物</a>
                                    <a href="#"class="add">植物</a><a href="#" class="add">人物</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">描述</td>
                            <td>
                                <textarea class="txa" name="desc" maxlength="600" data-optional="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">图片</td>
                            <td>
                                <input type="file" name="pic" >
                            </td>
                        </tr>
                        <tr>
                            <td align="right">标签</td>
                            <td>
                                <div class="pr">
                                    <div class="divipt clr">
                                        <input id="tag" class="l ipt mr8" autocomplete="off" type="text" name="tag" value="" maxlength="100" data-optional="1">
                                    </div>
                                    <label for="popal-mbaddtagipt" id="popal-mbaddtag-lb" style="display: none;">多个标签用空格隔开</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <a class="abtn l" href="javascript:;" target="_target">
                                    <button type="submit" id="button"><u>创建</u></button>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

{{--点击创建，那么创建个人专辑的表单显示在页面上，点击关闭，那么页面消失--}}
    <script>
        var createbtn=document.getElementById('createbtn');
        var create=document.getElementById('create');
        var close=document.getElementById('close');
        createbtn.onclick=function()
        {
            create.style.display='block';
        }
        close.onclick=function()
        {
            create.style.display='none';
        }
    </script>
{{--在创建专辑时，选中哪个标签，那么在表单的标签栏中会显示--}}
    <script>
            $('.add').click(function (e) {
                $(this).css({'color':'#FF4466','border-color':'#FF4466'});
                content='';
                content+=$(this).html();
                $('#tag').val(content);
            })
    </script>
<script>
   var name=document.getElementById('name');
    name.onblur=function()
    {
        if(name.value=='')
        {
           var nspan=document.getElementById('nspan');
           nspan.innerHTML="<a style='color:red'>亲，写内容吧</a>"
        }
    }
</script>
@endsection