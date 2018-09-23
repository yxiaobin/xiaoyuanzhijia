
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!-- 图标 -->
    <link rel="icon" type="image/png" href="{{asset("assets/i/favicon.png")}}">
    <link rel="stylesheet" href="{{asset("css/reset.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/amazeui.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/detail.css")}}">
    <link href="{{asset("css/mui.min.css")}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <title>校园之家</title>
</head>

<body>
<!-- 顶部 -->
<header data-am-widget="header" class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        <a href="{{url('/')}}">
            <span class="am-icon-home"></span>
            <span  class="am-navbar-label"></span>
        </a>
    </div>
    <h1 class="am-header-title">
        <a href="#" class="">
            兑换记录
        </a>
    </h1>
    </nav>
</header>

<!-- 内容 -->
<div class="">
    <ul class="mui-table-view">
        @foreach($ps as $p)
        <li class="mui-table-view-cell mui-media" id="articlegoTo" style="height: 87px;">
            @php
            $key = $p->good;
            @endphp
            <img class="mui-media-object mui-pull-left" src="{{asset("uploads/$key->img")}}" style="width: 117px!important;">
            <div class="mui-media-body" style="margin-top: 12px;">
                {{$key->name}}
                <p class='mui-ellipsis'>
                    <span style="font-size:12px;color: #999;">成功</span>
                </p>
            </div>
        </li>
        @endforeach
    </ul>
</div>



@include('home.layouts.bottom')

<!-- js -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/amazeui.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/mui.min.js")}}"></script>

</body>

</html>
