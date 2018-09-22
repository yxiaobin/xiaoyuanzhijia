@extends('home.layouts.main')
@section('css')
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset("css/article.css")}}" />
@endsection

@section('title')
    <title>校园之家</title>
@endsection

@section('content')

    @include('home.layouts.header',['header'=>'心语家园'])
    <!-- 内容 -->
    <!-- 内容 -->
    <div class="mui-content" style="margin-bottom:20px;">
        <div class="header">
            <div class="name">
                <h2>{{$story->title}}</h2>
            </div>
            <div class="info">
                @if($story->user->image)<img src="{{$story->user->image}}" /> {{$story->user->name}}
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
                    <a href="timeline.html" id="timelinegoTo"> @if($story->user->image)<img src="{{$story->user->image}}" /></a>
                    <div class="author_name">
                        菜鸟卡比兽
                    </div>
                    <a href="timeline.html"><button id="alertBtn" class="mui-pull-right mui-btn-green">看他</button></a>
                </div>
            </a>
        </div>

    </div>

    <!-- 评论展示 -->
    <div class="mui-content" >
        <div class="mui-scroll">
            <!--全部评论-->
            <ul class="mui-table-view" style="margin-top: 20px;">
                <li class="mui-table-view-cell mui-media">
                    <a href="timeline.html">
                        <img class="mui-media-object mui-pull-left" src="images/slider1.jpg">
                        <div class="mui-media-body">
                            网名
                            <p class='mui-ellipsis'>
                                评论内容
                            </p>
                        </div>
                        <a href="#picture" style="float: right; font-size: 30px;"><strong>···</strong></a>
                    </a>
                </li>
                <li class="mui-table-view-cell mui-media">
                    <a href="timeline.html">
                        <img class="mui-media-object mui-pull-left" src="images/slider1.jpg">
                        <div class="mui-media-body">
                            <span>木屋</span> 回复 <span>网名</span>
                            <p class='mui-ellipsis'>想要这样一间小木屋，夏天挫冰吃瓜，冬天围炉取暖.</p>
                        </div>
                        <a href="#picture" style="float: right; font-size: 30px;"><strong>···</strong></a>
                    </a>
                    </a>
                </li>

                <li class="mui-table-view-cell mui-media">
                    <a href="timeline.html">
                        <img class="mui-media-object mui-pull-left" src="images/slider1.jpg">
                        <div class="mui-media-body">
                            CBD
                            <p class='mui-ellipsis'>烤炉模式的城，到黄昏，如同打翻的调色盘一般.</p>
                        </div>
                        <a href="#picture" style="float: right; font-size: 30px;"><strong>···</strong></a>
                    </a>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- 发布按钮 -->
    <a href="talk_launch.html">
        <img src="images/add_talk.png" alt="" style="width:50px;height:50px;border-radius:50%;position:fixed;right:10px;bottom:150px;z-index:999;">
    </a>



    <div id="picture" class="mui-popover mui-popover-action mui-popover-bottom">
        <ul class="mui-table-view">
            <li class="mui-table-view-cell">
                <a href="talk_launch.html">回复</a>
            </li>
            <li class="mui-table-view-cell">
                <a href="#gmoney">打赏</a>
            </li>
        </ul>
        <ul class="mui-table-view">
            <li class="mui-table-view-cell">
                <a href="#picture"><b>取消</b></a>
            </li>
        </ul>
    </div>
    <div id="gmoney" class="mui-popover mui-popover-action mui-popover-bottom">
        <ul class="mui-table-view">
            <li class="mui-table-view-cell">
                <a href="#">10积分</a>
            </li>
            <li class="mui-table-view-cell">
                <a href="#">20积分</a>
            </li>
            <li class="mui-table-view-cell">
                <a href="#">30积分</a>
            </li>
            <li class="mui-table-view-cell">
                <a href="#">40积分</a>
            </li><li class="mui-table-view-cell">
                <a href="#">50积分</a>
            </li>

        </ul>
        <ul class="mui-table-view">
            <li class="mui-table-view-cell">
                <a href="#picture"><b>取消</b></a>
            </li>
        </ul>
    </div>
@endsection
<!-- js -->
@section('js')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection