@extends('home.layouts.main')
@section('css')
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/mui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link href="css/mui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">

    <title>校园之家</title>
    <style media="screen">
        .content {
            margin-bottom: 50px;
        }

        .content h3,
        .content p {
            margin: 10px auto;
            text-align: center;
        }

        .content .describe {
            margin: 10px;
        }

        .content .describe img {
            width: 100%;
        }

        .mui-scroll ul li a img {
            border-radius: 50%;
        }
    </style>
@endsection

<!-- 顶部 -->
@section('content')

    @include('home.layouts.header',['header'=>'你问我答'])

    <!-- 内容 -->
    <div class="content">
        <h3>{{$question->title}}</h3>
        <p>{{date('Y.m.d',strtotime($question->created_at))}}</p>
        <div class="describe">
            {{$question->detail}}
        </div>
    </div>
    <!-- 评论展示 -->
    <div class="mui-content">
        <div class="mui-scroll">
            <!--全部评论-->
            <ul class="mui-table-view">
                @foreach($comments as $comment)
                    <li class="mui-table-view-cell mui-media">
                        <a href="timeline.html">
                            <img class="mui-media-object mui-pull-left" src="{{asset('images/my.png')}}">
                            <div class="mui-media-body">
                                网名
                                <p class='mui-ellipsis'>
                                    {{$comment->content}}
                                </p>
                            </div>
                            <a href="#picture{{$comment->id}}"
                               style="float: right; font-size: 30px;"><strong>···</strong></a>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- 发布按钮 -->
    <a href="{{route('comment.create')}}?question_id={{$question->id}}">
        <img src="{{asset('images/add_talk.png')}}" alt=""
             style="width:50px;height:50px;border-radius:50%;position:fixed;right:10px;bottom:150px;z-index:999;">
    </a>


    @foreach($comments as $comment)
        <div style="z-index: 1000" id="picture{{$comment->id}}"
             class="mui-popover mui-popover-action mui-popover-bottom">
            <ul class="mui-table-view">
                <li class="mui-table-view-cell">
                    <a href="{{route('comment.create')}}?question_id={{$question->id}}&commnet_id={{$comment->id}}" id="applyBtn">回复</a>
                </li>
                <li class="mui-table-view-cell">
                    <a href="#gmoney">打赏</a>
                </li>
            </ul>
            <ul class="mui-table-view">
                <li class="mui-table-view-cell">
                    <a href="#picture{{$comment->id}}"><b>取消</b></a>
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
                </li>
                <li class="mui-table-view-cell">
                    <a href="#">50积分</a>
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
@section('js')
    <!-- js -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{asset('js/mui.min.js')}}"></script>
@endsection