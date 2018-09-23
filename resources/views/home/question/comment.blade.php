@extends('home.layouts.main')
@section('css')
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link href="{{asset('css/mui.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
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

    @include('home.layouts.header',['header'=>'发布评论'])

    <!-- 发布评论区 -->
    <form action="{{route('comment.store')}}" method="post">
        @include('admin.layouts.errors')
        <div class="form-group">
            <label for="exampleInputPassword1">评论内容</label>
            <textarea name="content" class="form-control" rows="3" placeholder=""></textarea>
            <input type="hidden" name="comment_id" value="{{$comment_id}}">
            <input type="hidden" name="question_id" value="{{$question_id}}">
            {{csrf_field()}}
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg">发布</button>
        </div>
    </form>
@endsection
@section('js')
    <!-- js -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection
