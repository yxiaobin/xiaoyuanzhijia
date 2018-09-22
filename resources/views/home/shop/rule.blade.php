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
        body{
            background-color: white;
        }
    </style>
@endsection
@section('title')
    <title>校园之家</title>
@endsection
@section('content')
    @include('home.layouts.header',['header'=>'积分规则'])


    <!-- 内容展示 -->
    <div class="font_content">
        <div class="content_one">
            <h3>山理积分馆是什么？</h2>
                <p style="text-indent: 2em;padding: 5px;">是用户使用自己的“稷下积分”兑换校内专属精美物品的商城。</p>
        </div>
        <div class="content_two">
            <h3>山理积分的获得途径有哪些？</h2>
                <p style="text-indent: 2em;padding: 5px;">用户注册登陆后会一次性获得50“稷下积分”，此后用户可通过在“你问我答”中解决别人的问题、“失物招领”和“你问我答”中获得别人打赏、“安全卫士”中成功报修获得相应的积分。</p>
        </div>
        <div class="content_three">
            <h3>补充说明</h2>
                <p style="text-indent: 2em;padding: 5px;">在“失物招领”和“众里寻人”中发布寻物寻人消息、“你问我答”中提出问题、在“失物招领”和“你问我答”中打赏别人会扣除相应积分。</p>
        </div>
    </div>


@endsection
@section('js')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/mui.min.js')}}"></script>
@endsection
