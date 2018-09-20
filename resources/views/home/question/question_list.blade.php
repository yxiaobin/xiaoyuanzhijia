@extends('home.layouts.main')
@section('css')
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <title>校园之家</title>
@endsection
<!-- 顶部 -->
@section('content')

    @include('home.layouts.header',['header'=>'你问我答'])


    <!-- 内容 -->
    <ul class="am-comments-list am-comments-list-flip" style="padding:0px 5px;">
        <li class="am-comment">
            <article class="am-comment">
                <a href="#link-to-user-home">
                    <img src="images/1b.jpg" alt="" class="am-comment-avatar" width="48" height="48"/>
                </a>

                <div class="am-comment-main">
                    <header class="am-comment-hd">
                        <a href="questionshow_detail.html">
                            <h3 class="am-comment-title">一句话概述问题</h3>
                        </a>
                    </header>

                    <div class="am-comment-bd">
                        <p>一年真的改变了好多 比如我不是那么在意别人的看法了 比如对于好多事学会了释然 比如不共傻瓜论短长 比如更加喜欢一个人待着了 比如我依然还想你却不着痕迹了... 一年好像又什么都没有变
                            还是那么喜欢大冰和燕池 还是喜欢看书听音乐 对于有些事还是那么执拗 还有，你依然在我心底</p>
                        <img src="images/1b.jpg" alt="" width="300" height="200"/>
                    </div>
                    <span style="padding-left: 160px;">2018-8-25</span>
                    <a href="##" style="margin-left: 10px">
                        <span class="am-icon-comment"></span>
                        <a href="talk_launch.html">
                            <span class="am-navbar-label">评论</span>
                        </a>
                    </a>

                </div>
            </article>
        </li>
        <li class="am-comment">
            <article class="am-comment">
                <a href="#link-to-user-home">
                    <img src="images/1b.jpg" alt="" class="am-comment-avatar" width="48" height="48"/>
                </a>

                <div class="am-comment-main">
                    <header class="am-comment-hd">
                        <a href="questionshow_detail.html">
                            <h3 class="am-comment-title">一句话概述问题</h3>
                        </a>
                    </header>

                    <div class="am-comment-bd">
                        <p>一年真的改变了好多 比如我不是那么在意别人的看法了 比如对于好多事学会了释然 比如不共傻瓜论短长 比如更加喜欢一个人待着了 比如我依然还想你却不着痕迹了... 一年好像又什么都没有变
                            还是那么喜欢大冰和燕池 还是喜欢看书听音乐 对于有些事还是那么执拗 还有，你依然在我心底</p>
                        <img src="images/1b.jpg" alt="" width="300" height="200"/>
                    </div>
                    <span style="padding-left: 160px;">2018-8-25</span>
                    <a href="##" style="margin-left: 10px">
                        <span class="am-icon-comment"></span>
                        <a href="talk_launch.html">
                            <span class="am-navbar-label">评论</span>
                        </a>
                    </a>

                </div>
            </article>
        </li>
    </ul>

    <!-- 发布按钮 -->
    <a href="{{route('question.create')}}">
        <img src="images/add.png" alt=""
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