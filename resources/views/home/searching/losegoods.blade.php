@extends('home.layouts.main')
@section('css')
    <link rel="icon" type="image/png" href="{{asset('assets/i/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@endsection
@section('title')
    <title>校园之家</title>
@endsection

@section('content')

    @include('home.layouts.header',['header'=>'失物招领'])

    <!-- 失物招领 -->
    <ul id="myTab" class="nav nav-tabs">
        <li class="active">
            <a href="#found" data-toggle="tab">失物招领</a>
        </li>
        <li><a href="#search" data-toggle="tab">众里寻它</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="found">

            <p>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/2b.jpg" alt="通用的占位符缩略图">
                        <div class="caption">
                            <h3>校园卡——计科1602小猪</h3>
            <p>捡到地点where+when+特征</p>
            <p>
                <a href="losepeople_detail.html" class="btn btn-success" role="button">
                    查看详情
                </a>
                <!-- <a href="losepeople_get.html" class="btn btn-default" role="button">
                            认领
                </a> -->
            </p>
        </div>
    </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="images/2b.jpg" alt="通用的占位符缩略图">
            <div class="caption">
                <h3>钱包——未知姓名</h3>
                <p>where+when+特征</p>
                <p>
                    <a href="losepeople_detail.html" class="btn btn-success" role="button">
                        查看详情
                    </a>
                    <!-- <a href="losepeople_get.html" class="btn btn-default" role="button">
                                认领
                            </a> -->
                </p>
            </div>
        </div>
    </div>

    </p>
    <!-- 发布按钮1 -->
    <a href="losepeople_launch.html" style="background-color:black">
        <img src="images/add.png" alt=""
             style="width:50px;height:50px;border-radius:50%;position:fixed;right:10px;bottom:150px;z-index:999;">
    </a>

    </div>
    <div class="tab-pane fade" id="search">

        <p>

            <div class="am-g">
                <div class="am-u-sm-12">
                    <div class="am-thumbnail">
                        <img src="assets\i\examples\admin-ie.png" alt="" class="am-comment-avatar" width="48"
                             height="48"/>
                        <div class="am-thumbnail-caption">
        <p>双木子</p>
        <p>找啥物呢？学习资料？还是找丢的东西</p>
        <p>2018.8.23</p>
        <p>
            <a href="searchIt_detail.html" class="btn btn-success" role="button">
                查看详情
            </a>

        </p>
    </div>
    </div>
    </div>
    </div>
    <div class="am-g">
        <div class="am-u-sm-12">
            <div class="am-thumbnail">
                <img src="assets\i\examples\admin-ie.png" alt="" class="am-comment-avatar" width="48" height="48"/>
                <div class="am-thumbnail-caption">
                    <p>双木子</p>
                    <p>找啥物呢？学习资料？还是找丢的东西</p>
                    <p>2018.8.23</p>
                    <p>
                        <a href="searchIt_detail.html" class="btn btn-success" role="button">
                            查看详情
                        </a>

                    </p>
                </div>
            </div>
        </div>
    </div>
    </p>

    <!-- 发布按钮2 -->
    <a href="searchIt_launch.html">
        <img src="images/add.png" alt=""
             style="width:50px;height:50px;border-radius:50%;position:fixed;right:10px;bottom:150px;z-index:999;">
    </a>
    </div>
    </div>
@endsection
@section('js')
    <!-- js -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection('js')

