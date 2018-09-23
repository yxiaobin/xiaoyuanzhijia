@extends('home.layouts.main')
@section('css')
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <title>校园之家</title>
    <style>
        a:link{text-decoration:none; }  
                                       a:visited{text-decoration:none; }
        a:hover{text-decoration:none;}
        a:active{text-decoration:none;} 

    </style>
@endsection
<!-- 顶部 -->
@section('content')

    @include('home.layouts.header',['header'=>'你问我答'])


    <!-- 内容 -->
    <ul class="am-comments-list am-comments-list-flip" style="padding:0px 5px;">
        @foreach($items as $item)
            <li class="am-comment">
                <article class="am-comment">
                    <a href="#link-to-user-home">
                        <img src="{{asset('uploads/'.\App\Member::find($item->user_id)->image)}}" alt="" class="am-comment-avatar" width="48" height="48"/>
                    </a>

                    <div class="am-comment-main">
                        <header class="am-comment-hd">
                            <a href="{{route('question.show',$item->id)}}">
                                <h3 class="am-comment-title" style="color: #000;padding: 10px;">{{$item->title}}</h3>
                            </a>
                        </header>

                        <div class="am-comment-bd">
                            <p>{{$item->detail}}</p>
                        </div>
                        <span style="padding-left: 160px;">{{date('Y.m.d',strtotime($item->created_at))}}</span>
                        <a href="##" style="margin-left: 10px">
                            {{--<span class="am-icon-comment"></span>--}}
                            <img src="{{asset('images/watch.png')}}" alt="" style="width: 20px;height: 20px;vertical-align: text-top;">
                            <a href="{{route('question.show',$item->id)}}" style="color: #000">
                                <span class="am-navbar-label">查看</span>
                            </a>
                        </a>

                    </div>
                </article>
            </li>
        @endforeach
    </ul>

    <!-- 发布按钮 -->
    <a href="{{route('question.create')}}">
        <img src="images/launch.png" alt=""
             style="width:50px;height:50px;border-radius:50%;position:fixed;right:10px;bottom:150px;z-index:999;">
    </a>
@endsection

@section('js')
    <!-- js -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection