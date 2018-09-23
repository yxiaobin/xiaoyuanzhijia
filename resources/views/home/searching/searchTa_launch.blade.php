@extends('home.layouts.main')
@section('css')
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <style>
        a:link{text-decoration:none; }  
                                       a:visited{text-decoration:none; }
        a:hover{text-decoration:none;}
        a:active{text-decoration:none;} 

    </style>
    <title>校园之家</title>
@endsection
@section('content')

    @include('home.layouts.header',['header'=>'众里寻人'])


    <!-- 填写表单 -->
    <form action="{{route('findpeople.store')}}" method="post">
        @include('admin.layouts.errors')
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputPassword1">待寻人的详细描述</label>
            <textarea name="item_detail" class="form-control" rows="3" placeholder="如：找一个会MATLAB编程的同学一起参加数学建模"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">您的联系方式</label>
            <textarea class="form-control" name="phone"  rows="3" placeholder="如：电话：15064655***"></textarea>
        </div>
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

    </div>
@endsection
@section('js')
    <!-- js -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection