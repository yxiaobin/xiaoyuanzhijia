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
        a:link{text-decoration:none; }  
                                       a:visited{text-decoration:none; }
        a:hover{text-decoration:none;}
        a:active{text-decoration:none;} 
        .many img{
            width: 100%;
        }
    </style>
@endsection
@section('title')
    <title>校园之家</title>
@endsection
@section('content')
    @include('home.layouts.header',['header'=>'物品详情'])
    @include('home.layouts.message')
    <!-- 内容 -->
    <!-- 幻灯片 -->
    <div id="content">
        <!-- 幻灯片 -->
        <div id="slideBox" class="slideBox">
            <div class="bd">
                <ul>
                        <li>
                            <a class="pic" href="#"><img src="{{asset('uploads')}}/{{$good->img}}" /></a>
                        </li>
                </ul>
            </div>
            <div class="hd">
                <ul></ul>
            </div>
        </div>
        <div class="detail">
            <div class="first">
                <h3 style="padding:5px 0px 10px;font-weight:600">
                    {{$good->name}}
                </h3>
                <span style="color:#999;padding:5px 0px;">兑换积分：{{$good->price}}</span>
                <span style="color:#999;padding:5px 10px;">库存：{{$good->num}}</span>
            </div>
            <div class="second">
                <h4 style="font-weight:550">自取的地点：</h4>
                {{$good->address}}
            </div>
            <div class="third">
                <h4 style="font-weight:550">商品详情：</h4>
                <div style="padding: 5px;" class="many">
                    {!! $good->content !!}
                </div>
            </div>
            <!-- <span style="padding:20px;color:#ccc;">技术支持：烦skr人</span> -->
        </div>
        <div class="bottom" style="position:fixed;bottom:0;background-color:white;width:100%;height:60px;text-algin:center">
            <a href="{{url("exchange/{$good->id}")}}"><button type="button" name="button" style="background-color:#15d4d8;width:80%;color:white;height:40px;margin-top:10px;border-radius:5px;position: relative;left: 10%;">马上兑换</button></a>
        </div>
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
