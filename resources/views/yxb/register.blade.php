<!doctype html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Amaze UI Examples</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="assets/css/login-amazeui.min.css">
    <link rel="stylesheet" href="assets/css/login-app.css">
    <link rel="stylesheet" href="assets/css/amazeui.min.css">
</head>

<body>
<!-- 顶部 -->
<header data-am-widget="header" class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        <a href="home.html">
            <span class="am-icon-home"></span>
            <span  class="am-navbar-label"></span>
        </a>
    </div>
    <h1 class="am-header-title">
        <a href="search.html" class="">
            校园之家
        </a>
    </h1>
    </nav>
</header>

<div class="am-g" style="margin: 17px auto;">
    <!-- LOGO -->
    <div class="am-u-sm-12 am-text-center">
        <i class="am-icon-twitch myapp-login-logo"></i>
    </div>
    <!-- 登陆框 -->
    <div class="am-u-sm-11 am-u-sm-centered">
        <form class="am-form" action="{{url("/register")}}"method="post">
            {{ csrf_field() }}
            <fieldset class="myapp-login-form am-form-set">

                <div class="am-form-group am-form-icon">
                    <!-- <i class="am-icon-user"></i> -->
                    <input type="text" class="myapp-login-input-text am-form-field" placeholder="请输入您的姓名" name="name">
                </div>
                <div class="am-form-group am-form-icon">
                    <!-- <i class="am-icon-user"></i> -->
                    <input type="text" class="myapp-login-input-text am-form-field" placeholder="请输入您的学院" name="school">
                </div>
                <div class="am-form-group am-form-icon">
                    <!-- <i class="am-icon-user"></i> -->
                    <input type="text" class="myapp-login-input-text am-form-field" placeholder="请输入您的专业及班级" name="class">
                </div>
                <div class="am-form-group am-form-icon">
                    <!-- <i class="am-icon-user"></i> -->
                    <input type="text" class="myapp-login-input-text am-form-field" placeholder="请输入您的学号" name="stuid">
                </div>
                <div class="am-form-group am-form-icon">
                    <!-- <i class="am-icon-user"></i> -->
                    <input type="text" class="myapp-login-input-text am-form-field" placeholder="请输入您的手机号" name="phone">
                </div>
                <div class="am-form-group am-form-icon">
                    <!-- <i class="am-icon-lock"></i> -->
                    <input type="text" class="myapp-login-input-text am-form-field" placeholder="请设置您的密码" name="password">
                </div>
            </fieldset>

            <button class="myapp-login-form-submit am-btn am-btn-success am-btn-block ">注册</button>
            <br>
            <br>
        </form>
    </div>


</div>


<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
</body>

</html>
