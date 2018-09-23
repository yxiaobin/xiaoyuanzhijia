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
            <a href="#found" data-toggle="tab">招领启示</a>
        </li>
        <li><a href="#search" data-toggle="tab">寻物启示</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="found">
                @foreach($items['find'] as $item)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{asset('uploads'.'/'.$item->item_image)}}" alt="通用的占位符缩略图">
                        <div class="caption">
                            <h3>拾获物品：{{$item->item_name}}</h3>
                            <p>拾获地点：{{$item->find_address}}</p>
                            <p>物品描述：{{$item->item_detail}}</p>
                            <p>发布时间：{{date('Y.m.d',strtotime($item->created_at))}}</p>
                            <p>
                                <a href="{{route('findgoods.show',$item->id)}}" class="btn btn-success" role="button">
                                    查看详情
                                </a>
                                <!-- <a href="losepeople_get.html" class="btn btn-default" role="button">
                                            认领
                                </a> -->
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach


            <!-- 发布按钮1 -->
                <a href="{{route('findgoods.create')}}" style="background-color:black">
                    <img src="images/launch.png" alt=""
                         style="width:50px;height:50px;border-radius:50%;position:fixed;right:10px;bottom:150px;z-index:999;">
                </a>

            </div>

            <div class="tab-pane fade" id="search">
                @foreach($items['lose'] as $item)
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <div class="am-thumbnail">
                                <div style="margin-top: 5px;">
                                    <a href="{{url("myspace/$item->user_id")}}">
                                        <img src="{{asset('uploads/' . \App\Member::find($item->user_id)->image)}}" alt="" class="am-comment-avatar" style="border-radius: 50%;width: 40px;height: 40px;">
                                    </a>
                                    <div style="display: inline-block;padding: 5px;vertical-align: text-top;"><span style="vertical-align: sub;">{{\App\Member::find($item->user_id)->name}}</span></div>
                                </div>

                                {{--height="48"/>--}}
                                <div class="am-thumbnail-caption" style="margin-top: 10px;">
                                    <p>寻物名称：{{$item->item_name}}</p>
                                    <p>物品描述：{{$item->item_detail}}</p>
                                    <p>发布时间：{{date('Y.m.d',strtotime($item->created_at))}}</p>
                                    <p>
                                        <a href="{{route('findgoods.show',$item->id)}}" class="btn btn-success" role="button">
                                            查看详情
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
               @endforeach
                <!-- 发布按钮2 -->
                <a href="{{route('losegoods.index')}}">
                    <img src="{{asset('images/launch.png')}}" alt=""
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

