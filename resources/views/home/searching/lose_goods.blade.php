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

    @include('home.layouts.header',['header'=>'众里寻他'])

    <!-- 填写表单 -->
    <form action="{{route('losegoods.store')}}" method="post">
        @include('admin.layouts.errors')
        <div class="form-group">
            <label for="exampleInputPassword1">待寻物品</label>
            {{csrf_field()}}
            <input type="text" name="item_name" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">待寻物的详细描述</label>
            <textarea class="form-control" name="item_detail" rows="3" placeholder=""></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">找到后怎么与您联系</label>
            <textarea name="phone" class="form-control" rows="3" placeholder="电话或者其他方式"></textarea>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">提交</button>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            温馨提示
                        </h4>
                    </div>
                    <div class="modal-body">
                        您的本次操作将扣除20积分，是否继续？
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消
                        </button>
                        <button type="submit" class="btn btn-primary">
                            确定
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal -->
        </div>
    </form>

    <!-- 模态框（Modal） -->

@endsection
@section('js')
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection
