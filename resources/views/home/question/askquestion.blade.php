@extends('home.layouts.main')
@section('css')

    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <title>校园之家</title>
@endsection
<!-- 顶部 -->
@section('content')

    @include('home.layouts.header',['header'=>'你问我答'])

    <!-- 发布问题 -->
    <form role="form" action="{{route('question.store')}}" method="post">
        @include('admin.layouts.errors')
        <div class="form-group">
            <!-- <label for="name">名称</label> -->
            <input name="title" type="text" class="form-control" id="name" placeholder="请一句话概括您的问题（最多60字）">
        </div>
        <div class="form-group">
            <label for="inputfile">问题描述</label>
            <textarea name="detail" class="form-control" rows="3" placeholder="请添加问题的详细描述"></textarea>
        </div>
        {{csrf_field()}}
        <div class="form-group">
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">提交</button>
        </div>
        <!-- 模态框（Modal） -->
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


@endsection
@section('js')
    <!-- js -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection