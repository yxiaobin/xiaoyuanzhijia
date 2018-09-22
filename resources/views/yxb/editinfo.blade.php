
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
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/detail.css")}}">
    <title>校园之家</title>
</head>

<body>
<!-- 顶部 -->
<header data-am-widget="header" class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        <a href="{{url("/")}}">
            <span class="am-icon-home"></span>
            <span  class="am-navbar-label"></span>
        </a>
    </div>
    <h1 class="am-header-title">
        <a href="#" class="">
            修改信息
        </a>
    </h1>
    </nav>
</header>

<!-- 填写表单 -->
<form method="post" action="{{url("/editinfo")}}" enctype="multipart/form-data" >
    {{csrf_field()}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-group">
        <label for="exampleInputPassword1">学号</label>
        <input type="number" class="form-control" readonly id="exampleInputPassword1" placeholder="请输入真实学号" name="stuid" value="{{$member->stuid}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">姓名</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入真实姓名" name="name" value="{{$member->name}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">班级</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="请输入真实信息" name="class" value="{{$member->class}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">描述自己的标签</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="如：考研、考公、爱篮球等" name="tag" value="{{$member->tag}}">
    </div>

    <div class="form-group">
        <label for="exampleInputFile">修改头像</label>
        <input type="file"  value="" name="image">
        <p class="help-block"></p>
    </div>

    <div class="form-group">
        <label for="exampleInputFile">学生证上传</label>
        @if($member->card_image == null)
        <input type="file"  value="" name="card_image">
        @else
            <img src="{{asset("uploads/$member->card_image")}}" alt="" style="width: 320px; height: 150px">
        @endif
            <p class="help-block"></p>
    </div>
        <input type="submit" class="btn btn-success btn-lg" value="提交">

</form>

<!-- js -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/amazeui.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
</body>

</html>
