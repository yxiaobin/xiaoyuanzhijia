@extends('home.layouts.main')
@section('css')
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset("css/article.css")}}" />
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
    <!-- 内容 -->
    <div class="mui-content" style="margin-bottom:20px;">
        <div class="header">
            <div class="name">
                <h2>{{$story->title}}</h2>
            </div>
            <div class="info" style="text-align: center;">
                @if($story->user->image)
                    <img src="{{asset('uploads')}}/{{$story->user->image}}" />
                @else

                @endif
                {{$story->user->name}}
            </div>
        </div>
        <!--文章内容-->
        <div class="content">

            {{$story->content}}

        </div>

        <!--关于作者-->
        <div class="author" >
            <h5>关于作者</h5>
            <a>
                <div class="author_info">
                    <a href="{{url('myspace')}}/{{$story->user->id}}" id="timelinegoTo"> @if($story->user->image)<img src="{{asset('uploads')}}/{{$story->user->image}}" />@endif
                        <div class="author_name">{{$story->user->name}}</div>
                    </a>
                    <a href="{{url('myspace')}}/{{$story->user->id}}"><button id="alertBtn" class="mui-pull-right mui-btn-green">看他</button></a>
                </div>
            </a>
        </div>
    </div>

    <!-- 评论展示 -->
    <div class="mui-content" >
        <div class="mui-scroll">
            <!--全部评论-->
            <ul class="mui-table-view" style="margin-top: 20px;">
                @foreach($story->comments as $comment)
                    <li class="mui-table-view-cell mui-media">
                            @if($comment->user->image) <img class="mui-media-object mui-pull-left" src="{{asset("uploads")}}/{{$comment->user->image}}" style="width: 40px;height: 40px;">@endif
                            <div class="mui-media-body">
                                <a href="{{url('myspace')}}/{{$comment->user->id}}">{{$comment->user->name}}</a> @if($comment->father_id!=0) 回复 <a href="{{url('myspace')}}/{{$comment->user->id}}">{{$comment->father->name}}</a> @endif
                                <p class='mui-ellipsis'>
                                    {{$comment->content}}
                                </p>
                            </div>
                                <a href="#picture{{$comment->id}}" style="float: right; font-size: 30px;"><strong>···</strong></a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- 发布按钮 -->
    <a href="{{url("story/comment/$story->id")}}">
        <img src="{{asset('images/launch.png')}}" alt="" style="width:50px;height:50px;border-radius:50%;position:fixed;right:10px;bottom:150px;z-index:999;">
    </a>
    @foreach($story->comments as $comment)
        <div id="picture{{$comment->id}}" class="mui-popover mui-popover-action mui-popover-bottom">
            <ul class="mui-table-view">
                <li class="mui-table-view-cell">
                    <a href="{{url('story/comment')}}/{{$story->id}}/{{$comment->user->id}}">回复</a>
                </li>
                <li class="mui-table-view-cell">
                    <a href="#gmoney{{$comment->id}}">打赏</a>
                </li>
            </ul>
            <ul class="mui-table-view">
                <li class="mui-table-view-cell">
                    <a href="#picture{{$comment->id}}"><b>取消</b></a>
                </li>
            </ul>
        </div>
        <div id="gmoney{{$comment->id}}" class="mui-popover mui-popover-action mui-popover-bottom">
            <ul class="mui-table-view">
                <li class="mui-table-view-cell">
                    <a href="{{url("reward")}}/{{$comment->user->id}}/10">10积分</a>
                </li>
                <li class="mui-table-view-cell">
                    <a href="{{url("reward")}}/{{$comment->user->id}}/20">20积分</a>
                </li>
                <li class="mui-table-view-cell">
                    <a href="{{url("reward")}}/{{$comment->user->id}}/30">30积分</a>
                </li>
                <li class="mui-table-view-cell">
                    <a href="{{url("reward")}}/{{$comment->user->id}}/40">40积分</a>
                </li><li class="mui-table-view-cell">
                    <a href="{{url("reward")}}/{{$comment->user->id}}/50">50积分</a>
                </li>
            </ul>
            <ul class="mui-table-view">
                <li class="mui-table-view-cell">
                    <a href="#picture{{$comment->id}}"><b>取消</b></a>
                </li>
            </ul>
        </div>
    @endforeach

@endsection
<!-- js -->
@section('js')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/mui.min.js')}}"></script>
@endsection