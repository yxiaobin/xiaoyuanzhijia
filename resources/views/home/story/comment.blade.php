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

    @include('home.layouts.header',['header'=>'发布评论'])
    <!-- 发布评论区 -->
    <form action="{{url("comment")}}/{{$story->id}}/{{$id}}" method="post">
        {{csrf_field()}}
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