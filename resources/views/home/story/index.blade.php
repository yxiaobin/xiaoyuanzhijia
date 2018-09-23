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
    <title>校园之家</title>
@endsection

@section('content')

    @include('home.layouts.header',['header'=>'心语家园'])
    @include('home.layouts.message')
    <!-- 内容 -->
    @foreach($stories as $story)
        <div class="mui-card" style="margin-bottom:30px">
            <!--页眉，放置标题-->
            <div class="mui-card-header mui-card-media">
                @if($story->user->image)
                    <img src="{{asset("uploads")}}/{{$story->user->image}}" style="border-radius: 50%;"/>
                @endif
                <div class="mui-media-body">
                    <h4 style="padding-top: 5px;">{{str_limit($story->title,'30','...')}}</h4>
                </div>
            </div>
            <!--内容区-->
            <a href="{{url("story/$story->id")}}">
                <div class="mui-card-content">
                    <img src="{{asset("uploads/$story->img")}}" alt="" style="width:100%;height:100%;">
                </div>
            </a>
            <div class="mui-card-footer">
                {{$story->user->name}}
                <span style="padding-left:20px">{{$story->created_at}}</span>
            </div>
        </div>
    @endforeach
        <a href="{{url("story/create")}}">
            <img src="images/launch.png" alt="" style="width:50px;height:50px;border-radius:50%;position:fixed;right:10px;bottom:150px;z-index:999;">
        </a>

@endsection
<!-- js -->
@section('js')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection