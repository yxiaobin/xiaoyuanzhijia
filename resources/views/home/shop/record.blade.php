
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
    @include('home.layouts.header',['header'=>'兑换记录'])

    <!-- 内容 -->
    <div class="">
        <ul class="mui-table-view">
            @foreach($records as $record)
            <li class="mui-table-view-cell mui-media" id="articlegoTo" style="height: 87px;">
                <img class="mui-media-object mui-pull-left" src="{{$record->good->img}}" style="width: 117px!important;">
                <div class="mui-media-body" style="margin-top: 12px;">
                    {{$record->good->name}}
                    <p class='mui-ellipsis'>
                        <span style="font-size:12px;color: #999;">@if($record->status==1) 已兑换 @else 待兑换 @endif</span>
                    </p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    @include('home.layouts.bottom')
@endsection
@section('js')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/mui.min.js')}}"></script>
@endsection
