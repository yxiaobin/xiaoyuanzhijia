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

    <!-- 填写表单 -->
    <form action="{{route('findgoods.store')}}" method="post" enctype="multipart/form-data">
        @include('admin.layouts.errors')
        <div class="form-group">
            <label for="exampleInputPassword1">捡到东西详细地址</label>
            {{csrf_field()}}
            <input type="text" name="find_address" class="form-control" id="exampleInputPassword1" placeholder="请输入详细地址：楼层，教室等">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">捡到物品</label>
            <input type="text" name="item_name" class="form-control" id="exampleInputPassword1" placeholder="校园卡、雨伞等">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">捡到物品的描述</label>
            <textarea name="item_detail" class="form-control" rows="3" placeholder="如丢失人信息等等"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">丢失人怎么与您联系</label>
            <textarea name="phone" class="form-control" rows="3" placeholder="电话或者其他方式"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">捡到物品的图片上传</label>
            <input name="item_image" type="file" id="exampleInputFile">
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