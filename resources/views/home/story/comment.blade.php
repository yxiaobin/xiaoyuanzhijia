@extends('home.layouts.main')
@section('css')
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
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

    @include('home.layouts.header',['header'=>'发布评论'])
    <!-- 发布评论区 -->
    <form action="{{url("story/comment")}}/{{$story_id}}/{{$id}}" method="post">
        {{csrf_field()}}
        @include('home.layouts.message')
        <div class="form-group">
            <label for="exampleInputPassword1">评论内容</label>
            <textarea class="form-control" rows="3" placeholder="" name="content"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg">发布</button>
        </div>
    </form>

@endsection
<!-- js -->
@section('js')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection