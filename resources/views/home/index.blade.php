@extends('home.layouts.main')
<!DOCTYPE html>
@section('css')
  <link rel="icon" type="image/png" href="{{asset('assets/i/favicon.png')}}">
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection
@section('title')
  <title>校园之家</title>
@endsection
@include('home.layouts.header',['header'=>'校园之家'])
@section('content')
  <!-- 幻灯片 -->
  <div id="content">
    <!-- 幻灯片 -->
    <div id="slideBox" class="slideBox">
      <div class="bd">
        <ul>
          <li>
            <a class="pic" href="链接到月饼的商品介绍"><img src="images/slider1.jpg" style="height: 200px;"/></a>
            <a class="tit" href="#" style="margin-bottom: 15px">理工大自制中秋月饼</a>
          </li>
          <li>
            <a class="pic" href="链接到关于军训的心语"><img src="images/slider2.png"  style="height: 200px;"/></a>
            <a class="tit" href="#" style="margin-bottom: 15px">光影军训</a>
          </li>
          <li>
            <a class="pic" href="链接到关于新生的心语"><img src="images/slider3.jpg"  style="height: 200px;"/></a>
            <a class="tit" href="#" style="margin-bottom: 15px">迎新生</a>
          </li>
        </ul>
      </div>
      <div class="hd">
        <ul></ul>
      </div>
    </div>

  </div>

  <!-- 内容 -->
  <div data-am-widget="list_news" class="am-list-news am-list-news-default">
    <!--小左侧标题-->
    <div class="am-list-news-hd am-cf">
      <h2 style="border-left: 5px solid #15d4d8; padding-left: 5px;">共建家园</h2>
    </div>
    <div class="am-list-news-bd">
      <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }">
        <li style="text-align: center;">
          <div class="am-gallery-item">
            <a href="{{route('findgoods.index')}}"><img src="images/main1.jpg" alt="" style="width: 150px;height: 100px;" />
              <h3 class="am-gallery-title" style="text-align: center;">失物招领</h3>
            </a>
          </div>
        </li>
        <li style="text-align: center;">
          <div class="am-gallery-item">
            <a href="{{route('findpeople.index')}}"><img src="images/main2.jpg" alt="" style="width: 150px;height: 100px;" />
              <h3 class="am-gallery-title" style="text-align: center;">众里寻人</h3>
            </a>
          </div>
        </li>
        <li style="text-align: center;">
          <div class="am-gallery-item">
           <a href="{{route('question.index')}}"><img src="images/main3.jpg" alt="" style="width: 150px;height: 100px;" />
              <h3 class="am-gallery-title" style="text-align: center;">你问我答</h3>
            </a>
          </div>
        </li>
      </ul>
    </div>
    <div class="am-list-news-hd am-cf">
      <h2 style="border-left: 5px solid #15d4d8;padding-left: 5px;">保护家园</h2>
    </div>
    <div class="am-list-news-bd">
      <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }">
        <li style="text-align: center;">
          <div class="am-gallery-item">
            <a href="{{url('repair')}}"><img src="images/main4.jpg" alt="" style="width: 150px;height: 100px;" />
              <h3 class="am-gallery-title" style="text-align: center;">安全卫士</h3>
            </a>
          </div>
        </li>
      </ul>
    </div>
    <div class="am-list-news-hd am-cf">
      <h2 style="border-left: 5px solid #15d4d8;padding-left: 5px;">装饰家园</h2>
    </div>
    <div class="am-list-news-bd">
      <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }">
        <li style="text-align:center">
          <div class="am-gallery-item">
            <a href="{{url('story')}}"><img src="images/main5.jpg" alt="" style="width: 150px;height: 100px;"/>
              <h3 class="am-gallery-title" style="text-align: center;">家园心语</h3>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>

@endsection
@include('home.layouts.bottom')
@section('js')
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
  <!-- js -->
  <script type="text/javascript" src="{{asset('js/TouchSlide.1.1.js')}}"></script>
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
