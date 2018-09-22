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

    @include('home.layouts.header',['header'=>'失物招领'])
    <!-- 填写保修表单 -->
    <form action="{{url('repair')}}" method="POST" enctype="multipart/form-data">
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
            <label for="exampleInputPassword1">维修地址</label>
            <select class="form-control" name="address">
                <option>3教</option>
                <option>4教</option>-
                <option>5教</option>
                <option>其他</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">详细地址</label>
            <input type="text" class="form-control" name="address_detail" id="exampleInputPassword1" placeholder="请输入详细地址：楼层，教室等">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">维修物品</label>
            <select class="form-control" name="object">
                <option>灯</option>
                <option>风扇</option>
                <option>桌椅</option>
                <option>等等</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">具体描述</label>
            <textarea class="form-control" rows="3" placeholder="尽可能详细的描述给维修师傅带去便利哦~" name="detail"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">需维修物品的图片上传</label>
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