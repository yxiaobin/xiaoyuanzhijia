@extends('home.layouts.main')
@section('css')
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <link href="{{asset('css/mui.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <style>
        a:link{text-decoration:none ;}
        a:visited {text-decoration:none ; }
        a:hover {text-decoration:none ;}
        a:active {text-decoration:none ;}
        img{
            width: 100%;
        }
    </style>
@endsection
@section('title')
    <title>积分商城</title>
@endsection
@section('content')
    {{--@include('home.layouts.header',['header'=>'积分商城'])--}}
    <header data-am-widget="header" class="am-header am-header-default">
        <div class="am-header-left am-header-nav">
            {{--<a href="#" onclick="javascript:history.back(-1)">--}}
                {{--<span class="am-icon-home"></span>--}}
                {{--<span  class="am-navbar-label"></span>--}}
                {{--<img src="{{asset('images/back.png')}}" alt="" style="width: 20px;height: 20px;">--}}
            {{--</a>--}}
        </div>
        <h1 class="am-header-title">
            校园之家
        </h1>
        </nav>
    </header>

    <!-- 内容 -->
    <div class="info_header">
        <div class="one">
            <h4 style="display:inline-block">山理积分馆</h4>
            <a href="{{url('rule')}}" style="color: #ccc">规则</a>
        </div>
        <div class="two">
            <span> 积分：@if($user){{$user->money}}@else 登陆后查看 @endif <img src="images/jifen.png" alt="" style="width:25px;height:25px"></span>
            <a href="{{url('exchange/record')}}" style="float:right">兑换记录 ></a>
        </div>
    </div>

    <!-- 幻灯片 -->
    <div id="contentt">
        <!-- 幻灯片 -->
        <div id="slideBox" class="slideBox">
            <div class="bd">
                <ul>
                    @foreach($good_banners as $good_banner)
                    <li>
                        <a class="pic" href="{{url("good/{$good_banner->id}")}}"><img src="{{asset('uploads')}}/{{$good_banner->img}}" /></a>
                    </li>
                    @endforeach
                    {{--<li>--}}
                        {{--<a class="pic" href="#"><img src="images/2b.jpg"/></a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="pic" href="#"><img src="images/3b.jpg"/></a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="pic" href="#"><img src="images/4b.jpg"/></a>--}}
                    {{--</li>--}}
                </ul>
            </div>
            <div class="hd">
                <ul></ul>
            </div>
        </div>

    </div>

    <!-- 商品展示 -->
    <div class="goods">
        <div class="title">
            <h4 style="display:inline-block;margin-top: -10px;">山理好物限时兑换</h4>
            <a href="{{url('goods')}}" style="float:right;color:#ccc">全部商品 ></a>
        </div>
        <ul class="mui-table-view mui-grid-view">
            @foreach($goods as $good)
            <li class="mui-table-view-cell mui-media mui-col-xs-6" id="moviegoTo">
                <a href="{{url("good/{$good->id}")}}">
                    <img class="mui-media-object" src="{{asset('uploads')}}/{{$good->img}}">
                    <div class="mui-media-body">{{$good->name}}</div>
                    <div class="mui-media-body">
                        积分:{{$good->price}}
                        &nbsp;库存：{{$good->num}}
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>




    @include('home.layouts.bottom')
@endsection
@section('js')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/mui.min.js')}}"></script>
    <!-- js -->
    <script type="text/javascript" src="{{asset('js/TouchSlide.1.1.js')}}"></script>
    <script type="text/javascript">
        TouchSlide({
            slideCell: "#slideBox",
            titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
            mainCell: ".bd ul",
            effect: "leftLoop",
            autoPage: true, //自动分页
            autoPlay: true //自动播放
        });
    </script>
@endsection
