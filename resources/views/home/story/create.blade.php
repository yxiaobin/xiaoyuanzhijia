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

    @include('home.layouts.header',['header'=>'心语家园'])
    <!-- 填写表单 -->
    <form action="{{url('story')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        @include('home.layouts.message')
        @if(count($errors) > 0)
            <div class="arlert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif
        <div class="form-group">
            <label for="exampleInputPassword1">标题</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="请输入标题" name="title">
        </div>

        <div class="form-group">
            <label for="inputfile">正文</label>
            <textarea class="form-control" rows="3" placeholder="请在此输入正文" name="content"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">上传图片</label>
            <input type="file" id="exampleInputFile" name="img">
            <p class="help-block"></p>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg">提交</button>
        </div>

    </form>

@endsection
<!-- js -->
@section('js')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection