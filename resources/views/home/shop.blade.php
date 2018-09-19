@extends('home.layouts.main')
@section('css')
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <link href="{{asset('css/mui.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

@endsection
@section('title')
    <title>积分商城</title>
@endsection
@section('content')
    @include('home.layouts.header',['header'=>'积分商城'])

    <!-- 内容 -->
    <div class="info_header">
        <div class="one">
            <h3 style="display:inline-block">山理积分馆</h3>
            <a href="rule.html">规则</a>
        </div>
        <div class="two">
            <span> 积分：8888 <img src="images/jifen.png" alt="" style="width:25px;height:25px"></span>
            <a href="jifen_record.html" style="float:right">兑换记录 ></a>
        </div>
    </div>

    <!-- 幻灯片 -->
    <div id="contentt">
        <!-- 幻灯片 -->
        <div id="slideBox" class="slideBox">
            <div class="bd">
                <ul>
                    <li>
                        <a class="pic" href="#"><img src="images/1b.jpg" /></a>
                        <!-- <a class="tit" href="#">墨西哥教师罢工 与警察激烈冲突</a> -->
                    </li>
                    <li>
                        <a class="pic" href="#"><img src="images/2b.jpg"/></a>
                    </li>
                    <li>
                        <a class="pic" href="#"><img src="images/3b.jpg"/></a>
                    </li>
                    <li>
                        <a class="pic" href="#"><img src="images/4b.jpg"/></a>
                    </li>
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
            <h3 style="display:inline-block">山理好物限时兑换</h3>
            <a href="allgoods.html" style="float:right;color:#ccc">全部商品 ></a>
        </div>
        <ul class="mui-table-view mui-grid-view">
            <li class="mui-table-view-cell mui-media mui-col-xs-6" id="moviegoTo">
                <a href="goods_detail.html">
                    <img class="mui-media-object" src="images/find.jpg">
                    <div class="mui-media-body">山理独家T恤</div>
                    <div class="mui-media-body">
                        积分:500
                    </div>
                </a>
            </li>
            <li class="mui-table-view-cell mui-media mui-col-xs-6" id="moviegoTo1">
                <a href="goods_detail.html">
                    <img class="mui-media-object" src="images/find.jpg">
                    <div class="mui-media-body">山理独家T恤</div>
                    <div class="mui-media-body">
                        积分:500
                    </div>
                </a>
            </li>
        </ul>
        <ul class="mui-table-view mui-grid-view">
            <li class="mui-table-view-cell mui-media mui-col-xs-6" id="moviegoTo">
                <a href="#">
                    <img class="mui-media-object" src="images/find.jpg">
                    <div class="mui-media-body">山理独家T恤</div>
                    <div class="mui-media-body">
                        积分:500
                    </div>
                </a>
            </li>
            <li class="mui-table-view-cell mui-media mui-col-xs-6" id="moviegoTo1">
                <a href="#">
                    <img class="mui-media-object" src="images/find.jpg">
                    <div class="mui-media-body">山理独家T恤</div>
                    <div class="mui-media-body">
                        积分:500
                    </div>
                </a>
            </li>
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
