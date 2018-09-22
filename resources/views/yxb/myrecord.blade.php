
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!-- 图标 -->
    <link rel="icon" type="image/png" href="{{asset("assets/i/favicon.png")}}">
    <link rel="stylesheet" href="{{asset("css/reset.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/amazeui.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/detail.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <title>校园之家</title>
</head>

<body>
<!-- 顶部 -->
<header data-am-widget="header" class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        <a href="{{url('/')}}">
            <span class="am-icon-home"></span>
            <span  class="am-navbar-label"></span>
        </a>
    </div>
    <h1 class="am-header-title">
        <a href="#" class="">
            我的记录
        </a>
    </h1>
    </nav>
</header>

<!-- 我的记录 -->
<div class="row" style="padding: 15px;">
    @foreach($news as $new)
        @if($new->type==2)
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{asset("uploads/$new->item_image")}}" alt="通用的占位符缩略图">
                    <div class="caption">
                        <h3>{{$new->item_name}}</h3>
                        <p>{{$new->item_detail}}</p>
                        <p>
                            <a href="#" class="btn btn-success" role="button">
                                查看详情
                            </a>
                            <a href="{{url("change/$new->id")}}" class="btn btn-default" role="button" style="float: right;">
                                @if($new->status == 0)
                                    正在解决
                                @else
                                    已解决
                                    @endif
                            </a>
                            <!-- <a href="losepeople_get.html" class="btn btn-default" role="button">
                                        认领
                            </a> -->
                        </p>
                    </div>
                 </div>
            </div>
        @else
            <div class="am-g">
        <div class="am-u-sm-12">
            <div class="am-thumbnail">
                <img src="{{asset("uploads/$new->item_image")}}" alt="" class="am-comment-avatar" width="48" height="48" />
                <div class="am-thumbnail-caption">
                    <p>{{$member->name}}</p>
                    <p>{{$new->item_detail}}</p>
                    <p>{{$new->updated_at}}</p>

                    <p>
                        <a href="#" class="btn btn-success" role="button">
                            查看详情
                        </a>
                        <a href="{{url("change/$new->id")}}" class="btn btn-default" role="button" style="float: right;">
                            @if($new->status == 0)
                                正在解决
                            @else
                                已解决
                            @endif
                        </a>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
        @endif
    @endforeach
</div>


<!-- 发布按钮 -->
<a href="{{url("/")}}" style="background-color:#">
    <img src="{{asset("images/add.png")}}" alt="" style="width:50px;height:50px;border-radius:50%;position:fixed;right:10px;bottom:150px;z-index:999;">
</a>

<!-- js -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/amazeui.min.js")}}"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>

