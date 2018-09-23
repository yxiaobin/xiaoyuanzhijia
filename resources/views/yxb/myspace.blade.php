
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="{{asset("css/reset.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/amazeui.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/detail.css")}}">
    <link href="{{asset("css/mui.min.css")}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset("css/timeline.css")}}" />

    <title>校园之家</title>
</head>

<body>
<!-- 顶部 -->
<header data-am-widget="header" class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        {{--<a href="#" onclick="javascript:history.back(-1)">--}}
            {{--<span class="am-icon-home"></span>--}}
            {{--<span  class="am-navbar-label"></span>--}}
            {{--<img src="{{asset('images/back.png')}}" alt="" style="width: 20px;height: 20px;">--}}
        {{--</a>--}}
        <a href="{{url('/')}}">
            <span class="am-icon-home"></span>
        </a>
    </div>
    <h1 class="am-header-title">
        <a href="#" class="">
            个人主页
        </a>
    </h1>
    </nav>
</header>

<!-- 内容 -->
<div class="mui-content" style="margin-bottom: 30px;">

    <div class="header">
        <div class="info">
            <img src="{{asset("uploads/$member->image")}}" />
            <div class="name">
                {{$member->name}}
            </div>

        </div>
        <div class="other">
            <span><img src="{{asset("images/jifen.png")}}" alt="" style="width:25px;height:25px">积分：{{$member->money}}</span>
            <span><img src="{{asset("images/watch.png")}}" alt="" style="width:25px;height:25px">标签：{{$member->tag}}</span>
        </div>
    </div>

    <!--时间线-->
    <div class="timeline">
        @foreach($mystorys as $p)
        <div class='nearsite-message'>
            <div class='avatar'>
                <img src="{{asset("images/timeline.png")}}" />
            </div>
            <div class='content' id="articlegoTo">
                <div class='triangle'></div>
                <span>
                    	{!! $p->content !!}
                    @if($p->img ==null)
                        <img src="{{asset("images/1b.jpg")}}" class="mui-pull-right"/>
                    @else
                        <img src="{{asset("uploads/$p->img")}}" class="mui-pull-right"/>
                    @endif
                </span>
            </div>
        </div>
        @endforeach
    </div>

</div>


<!-- js -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/amazeui.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/mui.min.js")}}"></script>
<script src="{{asset("js/iconfont.js")}}" type="text/javascript" charset="utf-8"></script>
</body>

</html>
