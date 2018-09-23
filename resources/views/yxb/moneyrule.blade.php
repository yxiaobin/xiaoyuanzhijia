
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
        <a href="#" onclick="javascript:history.back(-1)">
            {{--<span class="am-icon-home"></span>--}}
            {{--<span  class="am-navbar-label"></span>--}}
            <img src="{{asset('images/back.png')}}" alt="" style="width: 20px;height: 20px;">
        </a>
    </div>
    <h1 class="am-header-title">
        <a href="#" class="">
            积分规则
        </a>
    </h1>
    </nav>
</header>

<!-- 内容展示 -->
<div class="font_content">
    <div class="content_one">
        <h3>山理积分馆是什么？</h2>
            <p>描述（记得给山理积分起个辨识度高的名字）</p>
    </div>
    <div class="content_two">
        <h3>山理积分的获得途径有哪些？</h2>
            <p>描述</p>
    </div>
    <div class="content_three">
        <h3>补充说明</h2>
            <p>描述</p>
    </div>
</div>






<!-- js -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/amazeui.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/mui.min.js")}}"></script>

</body>

</html>
