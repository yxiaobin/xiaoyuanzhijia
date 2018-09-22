
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
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
    <title>校园之家</title>
    <style media="screen">
        .content {
            text-algin: center;
        }
        .content .info {
            border-bottom: 1px solid white;
            margin: 0px auto;
            text-algin: center;
            background-color: #15d4d8;
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
        <a href="{{url('/')}}">
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

<!-- 我的内容 -->
<div class="content">
    <div class="info">
        {{--没有登陆--}}
        @if(session('id')=='')
            <img src="{{asset("images/1b.jpg")}}" alt="" style="width:50px;height:50px;border-radius:50%;margin-top: 5px;position: relative;left: 50%;margin-left: -25px">
        <a href="{{route('login')}}">
            <div style="text-align: center;margin-top: 5px;color:white;font-size:18px;">登陆</div>
        </a>
        <div class="add" style="text-align: center;margin-bottom: 10px;font-size: 18px;">
            <span><img src="{{asset("images/jifen.png")}}" alt="" style="width:25px;height:25px">积分：###</span> &nbsp;&nbsp;
            <span><img src="{{asset("images/watch.png")}}" alt="" style="width:25px;height:25px">来访：###</span>
        </div>
        @else
            <img src="{{asset("uploads/$member->image")}}" alt="" style="width:50px;height:50px;border-radius:50%;margin-top: 5px;position: relative;left: 50%;margin-left: -25px">
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
            <img src="{{asset("images/my.png")}}" alt="" style="width:25px;height:25px;">
            @php
            $id = session('id');
            if($id == null){
            $id = 1;
            }
            @endphp
            <a href="{{url("myspace/$id")}}" style="vertical-align: middle;">
                个人中心
            </a>
        </div>
    </div>
    <div class="list">
        <div class="editinfo">
            <img src="{{asset("images/edit.png")}}" alt="" style="width:25px;height:25px;">
            <a href="{{url('editinfo')}}" style="vertical-align: middle;">
                修改信息
            </a>
        </div>
    </div>
    <div class="list">
        <div class="editinfo">
            <img src="images/jinbi.png" alt="" style="width:25px;height:25px;">
            <a href="{{url("mymoney")}}" style="vertical-align: middle;">
                我的积分
            </a>
        </div>
    </div>
    <div class="list">
        <div class="editinfo">
            <img src="images/send.png" alt="" style="width:25px;height:25px;">
            <a href="{{url("myrecord")}}" style="vertical-align: middle;">
                发布记录
            </a>
        </div>
    </div>
    <div class="list">
        <div class="editinfo">
            <img src="images/news.png" alt="" style="width:25px;height:25px;">
            <a href="{{url("mynew")}}" style="vertical-align: middle;">
                我的消息
            </a>
        </div>
    </div>
    <div class="list">
        <div class="editinfo">
            <img src="images/quit.png" alt="" style="width:25px;height:25px;">
            <a href="{{url("/logout")}}" style="vertical-align: middle;">
                退出
            </a>
        </div>
    </div>
</div>


@include('home.layouts.bottom')

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
</body>

</html>
