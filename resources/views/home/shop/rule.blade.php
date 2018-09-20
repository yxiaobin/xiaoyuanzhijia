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
    <title>校园之家</title>
@endsection
@section('content')
    @include('home.layouts.header',['header'=>'积分规则'])


    <!-- 内容展示 -->
    <div class="font_content">
        <div class="content_one">
            <h3>山理积分馆是什么？</h2>
                <p>描述（记得给山理积分起个辨识度高的名字）</p>
        </div>
        <div class="content_two">
            <h3>山理积分的获得途径有哪些？</h2>
                <p>描述</p>
        </div>
        <div class="content_three">
            <h3>补充说明</h2>
                <p>描述</p>
        </div>
    </div>


@endsection
@section('js')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/mui.min.js')}}"></script>
@endsection
