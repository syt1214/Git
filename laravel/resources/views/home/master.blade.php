
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
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
        @yield('content')
</body>
</html>
