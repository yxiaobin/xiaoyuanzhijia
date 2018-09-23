<!doctype html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>校园之家</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="stylesheet" href="{{asset("assets/css/login-amazeui.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/login-app.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/amazeui.min.css")}}">
</head>

<body>
<!-- 顶部 -->
<header data-am-widget="header" class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        <a href="{{url('/')}}">
            <span class="am-icon-home"></span>
        </a>
    </div>
    <h1 class="am-header-title">
        <a href="#" class="">
            校园之家
        </a>
    </h1>
    </nav>
</header>

<div class="am-g" style="margin: 50px auto;">
    <!-- LOGO -->
    <div class="am-u-sm-12 am-text-center">
        {{--<i class="am-icon-twitch myapp-login-logo"></i>--}}
        <image src="{{asset('images/logo11.png')}}" style="border-radius: 50%;margin: 50px auto;"></image>
    </div>
    <!-- 登陆框 -->

    <div class="am-u-sm-11 am-u-sm-centered">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="am-form" action="{{route('getlogin')}}" method="get">
            <fieldset class="myapp-login-form am-form-set">
                <div class="am-form-group am-form-icon">
                    {{--<i class="am-icon-user"></i>--}}
                    <input type="number" class="myapp-login-input-text am-form-field" placeholder="请输入您的学号" name="stuid">
                </div>
                <div class="am-form-group am-form-icon">
                    {{--<i class="am-icon-lock"></i>--}}
                    <input type="password" class="myapp-login-input-text am-form-field" placeholder="至少6个字符" name="password">
                </div>
            </fieldset>
            {{csrf_field()}}
            <button class="myapp-login-form-submit am-btn am-btn-success am-btn-block ">登陆</button>
            <a href="{{route('register')}}" class="myapp-login-form-submit am-btn am-btn-success am-btn-block ">注册</a>

        </form>
    </div>

</div>


<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{asset("assets/js/amazeui.ie8polyfill.min.js")}}"></script>
<![endif]-->
<script src={{asset("assets/js/amazeui.min.js")}}""></script>
<script src="{{asset("assets/js/app.js")}}"></script>
</body>

</html>
