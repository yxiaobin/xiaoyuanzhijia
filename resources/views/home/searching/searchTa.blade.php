@extends('home.layouts.main')
@section('css')
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
@endsection
@section('title')
    <title>校园之家</title>
@endsection

@section('content')

    @include('home.layouts.header',['header'=>'众里寻ta'])

    <div id="myTabContent" class="tab-content">

        @foreach($items['people'] as $item)
        <div class="am-g">
            <div class="am-u-sm-12" style="margin-top: 10px;">
                <div class="am-thumbnail">
                    <img src="{{'uploads/' . \App\Member::find($item->user_id)->image}}" alt="" class="am-comment-avatar" width="48"
                         height="48"/>
                    <span>{{\App\Member::find($item->user_id)->name}}</span>
                    <div class="am-thumbnail-caption">

                        <p>{{$item->item_name}}</p>
                        <p>待寻人描述：{{$item->item_detail}}</p>
                        <p>发布时间：{{date('Y.m.d',strtotime($item->created_at))}}</p>
                        <p>
                            <a href="{{route('findpeople.show',$item->id)}}" class="btn btn-success" role="button">
                                查看详情
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <!-- 发布按钮 -->
    <a href="{{route('findpeople.create')}}">
        <img src="images/add.png" alt=""
             style="width:50px;height:50px;border-radius:50%;position:fixed;right:10px;bottom:150px;z-index:999;">
    </a>

    ​
@endsection
@section('js')
    <!-- js -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection
