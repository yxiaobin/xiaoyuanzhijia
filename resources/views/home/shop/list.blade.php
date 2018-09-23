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

    </style>
@endsection
@section('title')
    <title>积分商城</title>
@endsection
@section('content')
    @include('home.layouts.header',['header'=>'积分商城'])

    <!-- 内容 -->
    <div class="">
        <ul class="mui-table-view">
            @foreach($goods as $good)
            <li class="mui-table-view-cell mui-media" id="articlegoTo" style="height: 87px;">
                <img class="mui-media-object mui-pull-left" src="{{asset('uploads')}}/{{$good->img}}" style="width: 117px!important;">
                <div class="mui-media-body" style="margin-top: 12px;">
                    {{str_limit($good->name,16,'...')}}
                    <p class='mui-ellipsis'>
                        <span>积分：{{$good->price}}</span>
                    </p>
                </div>
                <a href="{{url("good/{$good->id}")}}" style="display: inline"><button type="button" name="button" style="float:right;margin-top:-38px;background-color: #15d4d8;color: white">去兑现</button></a>
            </li>
            @endforeach
        </ul>
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
