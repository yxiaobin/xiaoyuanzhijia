
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset("assets/i/favicon.png")}}">
    <link rel="stylesheet" href="{{asset("css/reset.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/amazeui.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link href="{{asset("css/mui.min.css")}}" rel="stylesheet" />
    <title>校园之家</title>
</head>
<body>
<!-- 顶部 -->
<header data-am-widget="header" class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        <a href="{{url("/")}}">
            <span class="am-icon-home"></span>
            <span  class="am-navbar-label"></span>
        </a>
    </div>
    <h1 class="am-header-title">
        <a href="#" class="">
            校园之家
        </a>
    </h1>
    </nav>
</header>

<!-- 内容 -->
<div class="mui-content" style="position: relative;">
   @foreach($ps as $p)
    <div class="mui-card">
        <div class="mui-card-content">
            <div class="mui-card-content-inner">
                {!! $p->message !!}
            </div>
        </div>
    </div>
   @endforeach
</div>


<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/amazeui.min.js")}}"></script>
</body>
</html>
