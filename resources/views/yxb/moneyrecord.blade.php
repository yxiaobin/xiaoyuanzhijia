
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!-- 图标 -->
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="assets/css/amazeui.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/detail.css">
    <link href="css/mui.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css">
    <title>校园之家</title>
</head>

<body>
<!-- 顶部 -->
<header data-am-widget="header" class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        <a href="home.html">
            <span class="am-icon-home"></span>
            <span  class="am-navbar-label"></span>
        </a>
    </div>
    <h1 class="am-header-title">
        <a href="search.html" class="">
            兑换记录
        </a>
    </h1>
    </nav>
</header>

<!-- 内容 -->
<div class="">
    <ul class="mui-table-view">
        <li class="mui-table-view-cell mui-media" id="articlegoTo" style="height: 87px;">
            <img class="mui-media-object mui-pull-left" src="images/1b.jpg" style="width: 117px!important;">
            <div class="mui-media-body" style="margin-top: 12px;">
                山理独家T恤
                <p class='mui-ellipsis'>
                    <span style="font-size:12px;color: #999;">成功</span>
                </p>
            </div>
        </li>

    </ul>
</div>



<!-- 底部导航栏 -->
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default" id="">
    <ul class="am-navbar-nav am-cf am-avg-sm-4">
        <li data-am-navbar-share>
            <a href="{{url("/")}}">
                <img src="images/home1.png" alt="" style="width:28px;height:28px;">
                <span class="am-navbar-label">校园之家</span>
            </a>
        </li>
        <li>
            <a href="shop_show.html" class="">
                <img src="images/shop1.png" alt="" style="width:28px;height:28px;">
                <span class="am-navbar-label">商城</span>
            </a>
        </li>
        <li>
            <a href="{{url("/mine")}}">
                <img src="images/my.png" alt="" style="width:28px;height:28px;">
                <span class="am-navbar-label">我的</span>
            </a>
        </li>
    </ul>
</div>

<!-- js -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mui.min.js"></script>

</body>

</html>
