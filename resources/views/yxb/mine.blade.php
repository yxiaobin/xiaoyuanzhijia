
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="assets/css/amazeui.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="css/main.css">
    <title>校园之家</title>
    <style media="screen">
        .content {
            text-algin: center;
        }
        .content .info {
            border-bottom: 1px solid white;
            margin: 0px auto;
            text-algin: center;
            background-color: #99FF66;
            color: white;
            font-size: 14px;

        }
        .list .editinfo {
            border-bottom: .1px solid #ccc;
            padding: 10px 20px;
        }
    </style>
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
            校园之家
        </a>
    </h1>
    </nav>
</header>

<!-- 我的内容 -->
<div class="content">
    <div class="info">
        {{--没有登陆--}}
        @if(session('id')=='')
            <img src="{{asset("images/1b.jpg")}}" alt="" style="width:50px;height:50px;border-radius:50%;margin-left:164px;margin-top: 5px;">
        <a href="{{route('login')}}">
            <div style="text-align: center;margin-top: 5px;color:white;font-size:18px;">登陆</div>
        </a>
        <div class="add" style="text-align: center;margin-bottom: 10px;font-size: 18px;">
            <span><img src="{{asset("images/jifen.png")}}" alt="" style="width:25px;height:25px">积分：666</span> &nbsp;&nbsp;
            <span><img src="{{asset("images/watch.png")}}" alt="" style="width:25px;height:25px">来访：111</span>
        </div>
        @else
            <img src="{{asset("uploads/$member->image")}}" alt="" style="width:50px;height:50px;border-radius:50%;margin-left:164px;margin-top: 5px;">
            <a href="{{route('login')}}">
                <div style="text-align: center;margin-top: 5px;color:white;font-size:18px;">{{$member->name}}</div>
            </a>
            <div class="add" style="text-align: center;margin-bottom: 10px;font-size: 18px;">
                <span><img src="{{asset("images/jifen.png")}}" alt="" style="width:25px;height:25px">积分：{{$member->money}}</span> &nbsp;&nbsp;
                <span><img src="{{asset("images/watch.png")}}" alt="" style="width:25px;height:25px">来访：111</span>
            </div>
        @endif

    </div>
    <div class="list">
        <div class="editinfo">
            <img src="images/person_show.png" alt="" style="width:25px;height:25px;">
            <a href="{{url("myspace")}}">
                个人中心
            </a>
        </div>
    </div>
    <div class="list">
        <div class="editinfo">
            <img src="{{asset("images/edit_info.png")}}" alt="" style="width:25px;height:25px;">
            <a href="{{url('editinfo')}}">
                修改信息
            </a>
        </div>
    </div>
    <div class="list">
        <div class="editinfo">
            <img src="images/money.png" alt="" style="width:25px;height:25px;">
            <a href="{{url("mymoney")}}">
                我的积分
            </a>
        </div>
    </div>
    <div class="list">
        <div class="editinfo">
            <img src="images/send.png" alt="" style="width:25px;height:25px;">
            <a href="{{url("myrecord")}}">
                发布记录
            </a>
        </div>
    </div>
    <div class="list">
        <div class="editinfo">
            <img src="images/news.png" alt="" style="width:25px;height:25px;">
            <a href="{{url("mynew")}}">
                我的消息
            </a>
        </div>
    </div>
    <div class="list">
        <div class="editinfo">
            <img src="images/news.png" alt="" style="width:25px;height:25px;">
            <a href="{{url("/logout")}}">
                退出
            </a>
        </div>
    </div>
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

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
</body>

</html>
