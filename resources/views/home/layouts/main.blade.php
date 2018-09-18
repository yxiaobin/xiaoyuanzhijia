<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('assets/i/favicon.png')}}">
    @yield('css')
    @yield('title')
</head>

<body>
@yield('content')
{{--@include('home.layouts.bottom')--}}
@yield('js')

</body>


</html>
