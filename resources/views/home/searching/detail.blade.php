@extends('home.layouts.main')
@section('css')
    <link rel="stylesheet" href="{{asset('css/mui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <style media="screen">
        .detailshow img {
            width: 100%;
        }

        .detailshow .content {

        }
    </style>
@endsection
@section('content')
    @include('home.layouts.header',['header'=>'失物招领'])

    <!-- 详情展示 -->
    @if($item->type==2)
    <div class="detailshow" style="padding: 20px">
        <img src="{{asset($item->item_image)}}" alt="">
        <div class="content">
            <br>
            <div class="thing-info">
                <p><strong>物品名称：</strong><span>{{$item->item_name}}</span></p>
                <p><strong>物品详情：</strong><span>{{$item->item_detail}}</span></p>
                <p><strong>发现物品的地址：</strong><span>{{$item->find_address}}</span></p>
                <h1>发现者信息：</h1>
                <p><strong>姓名：</strong><span>{{\App\Member::find($item->user_id)->name}}</span></p>
                <p><strong>学号：</strong><span>{{\App\Member::find($item->user_id)->stuid}}</span></p>
                <p><strong>班级：</strong><span>{{\App\Member::find($item->user_id)->class}}</span></p>
                <p><strong>发现者联系方式：</strong><span>电话：{{$item->phone}}</span></p>
            </div>

        </div>
    </div>
    @endif
    @if($item->type==1)
        <div class="detailshow" style="padding: 20px">
            <div class="content">
                <br>
                <div class="thing-info">
                    {{--<p><strong>待寻物的特征：</strong><span>{{$item->item_name}}</span></p>--}}
                    <p><strong>待寻物的详细描述：</strong><span>{{$item->item_detail}}</span></p>
                    <h1>联系人信息：</h1>
                    <p><strong>姓名：</strong><span>{{\App\Member::find($item->user_id)->name}}</span></p>
                    <p><strong>学号：</strong><span>{{\App\Member::find($item->user_id)->stuid}}</span></p>
                    <p><strong>班级：</strong><span>{{\App\Member::find($item->user_id)->class}}</span></p>
                    <p><strong>发现者联系方式：</strong><span>电话：{{$item->phone}}</span></p>
                </div>

            </div>
        </div>
    @endif
    @if($item->type==3)
        <div class="detailshow" style="padding: 20px">
            <div class="content">
                <br>
                <div class="thing-info">
                    {{--<p><strong>待寻人的特征：</strong><span>{{\App\Member::find($item->user_id)->name}}</span></p>--}}
                    <p><strong>待寻人的详细描述：</strong><span>{{$item->item_detail}}</span></p>
                    <h1>联系人信息：</h1>
                    <p><strong>姓名：</strong><span>{{\App\Member::find($item->user_id)->name}}</span></p>
                    <p><strong>学号：</strong><span>{{\App\Member::find($item->user_id)->stuid}}</span></p>
                    <p><strong>班级：</strong><span>{{\App\Member::find($item->user_id)->class}}</span></p>
                    <p><strong>发现者联系方式：</strong><span>电话：{{$item->phone}}</span></p>
                </div>
            </div>
        </div>
    @endif
        {{--<div class="col-md-12" style="height: 40px;width: 100%;text-align: center;">--}}
            {{--<a href="#picture" class="btn btn-default btn-lg" role="button"--}}
               {{--style="color:#33FF00;width: 70px;height: 40px;">打赏</a>--}}
            {{--</a>--}}

        {{--</div>--}}

        {{--<div class="give-money col-md-12">--}}
            {{--<img src="images/1b.jpg" alt="" style="width:30px;height:30px;border-radius:50%;margin-top: 5px;">--}}
            {{--<img src="images/1b.jpg" alt="" style="width:30px;height:30px;border-radius:50%;margin-top: 5px;">--}}
            {{--<img src="images/1b.jpg" alt="" style="width:30px;height:30px;border-radius:50%;margin-top: 5px;">--}}
            {{--<a style="vertical-align: bottom; font-size: 25px">></a>--}}
        {{--</div>--}}

    {{--<div id="picture" class="mui-popover mui-popover-action mui-popover-bottom">--}}
        {{--<ul class="mui-table-view">--}}
            {{--<li class="mui-table-view-cell">--}}
                {{--<a href="#">10积分</a>--}}
            {{--</li>--}}
            {{--<li class="mui-table-view-cell">--}}
                {{--<a href="#">20积分</a>--}}
            {{--</li>--}}
            {{--<li class="mui-table-view-cell">--}}
                {{--<a href="#">30积分</a>--}}
            {{--</li>--}}
            {{--<li class="mui-table-view-cell">--}}
                {{--<a href="#">40积分</a>--}}
            {{--</li>--}}
            {{--<li class="mui-table-view-cell">--}}
                {{--<a href="#">50积分</a>--}}
            {{--</li>--}}

        {{--</ul>--}}
        {{--<ul class="mui-table-view">--}}
            {{--<li class="mui-table-view-cell">--}}
                {{--<a href="#picture"><b>取消</b></a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
@endsection
<!-- js -->
@section('js')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/TouchSlide.1.1.js')}}"></script>
    <script src="{{asset('js/mui.min.js')}}"></script>
    <script type="text/javascript">
        TouchSlide({
            slideCell: "#slideBox",
            titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
            mainCell: ".bd ul",
            effect: "leftLoop",
            autoPage: true, //自动分页
            autoPlay: true //自动播放
        });
    </script>
@endsection
