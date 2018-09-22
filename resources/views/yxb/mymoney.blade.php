
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
            积分明细
        </a>
    </h1>
    </nav>
</header>

<!-- 内容 -->
<div class="info_header">
    <div class="one">
        <h3 style="display:inline-block">我的山理积分</h3>
        <a href="{{url("/monyrule")}}">规则？</a>
    </div>
    <div class="two">
        <span> 积分：{{$member->money}}<img src="{{asset("images/jifen.png")}}" alt="" style="width:25px;height:25px"></span>

        <a href="{{url("/monyrecord")}}" style="float:right">山理积分馆 ></a>
    </div>
</div>

<!-- 内容 -->
<div class="" style="margin-top:5px;">
    <ul class="mui-table-view">
        @foreach($r1 as $p)
            @php
            $key = $p->good();
            @endphp
        <li class="mui-table-view-cell mui-media" id="articlegoTo" style="height: 87px;">
            <!-- <img class="mui-media-object mui-pull-left" src="images/1b.jpg" style="width: 117px!important;"> -->
            <div class="mui-media-body" style="margin-top: 12px;">
                {{$key->name}}
                <p class='mui-ellipsis'>
                    <span style="font-size:14px;color:#ccc">{{date('Y-mk-d h:m:s',$wy->updated_at)}}</span>
                </p>
            </div>
            <span style="float:right;margin-top:-38px;">+{{$p->price}}</span>
        </li>
        @endforeach
        @foreach($r2 as $p)
                @php
                    $keymember = \App\Member::find('$p->accept_id');
                @endphp
            <li class="mui-table-view-cell mui-media" id="articlegoTo" style="height: 87px;">
                <!-- <img class="mui-media-object mui-pull-left" src="images/1b.jpg" style="width: 117px!important;"> -->
                <div class="mui-media-body" style="margin-top: 12px;">
                    发布你问我答支付积分给{{$keymember}}
                    <p class='mui-ellipsis'>
                        <span style="font-size:14px;color:#ccc">{{date('Y-mk-d h:m:s',$wy->updated_at)}}</span>
                    </p>
                </div>

                <span style="float:right;margin-top:-38px;">-{{$p->num}}</span>
            </li>
        @endforeach
    </ul>
</div>



<!-- js -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/amazeui.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/mui.min.js")}}"></script>


</body>

</html>
