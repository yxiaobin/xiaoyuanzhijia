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
            <a class="pic" href="#"><img src="images/1b.jpg" /></a>
            <a class="tit" href="#">墨西哥教师罢工 与警察激烈冲突</a>
          </li>
          <li>
            <a class="pic" href="#"><img src="images/2b.jpg"/></a>
            <a class="tit" href="#">日右翼游行纪念钓岛"国有化"周年</a>
          </li>
          <li>
            <a class="pic" href="#"><img src="images/3b.jpg"/></a>
            <a class="tit" href="#">女兵竞选美国小姐鼓励女性自强</a>
          </li>
          <li>
            <a class="pic" href="#"><img src="images/4b.jpg"/></a>
            <a class="tit" href="#">济南现“最窄人行道” 仅0.2米宽</a>
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
      <h2 style="border-left: 5px solid black;padding-left: 5px;">共建家园</h2>
    </div>
    <div class="am-list-news-bd">
      <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }">
        <li style="text-align: center;">
          <div class="am-gallery-item">
            <a href="{{route('loosegoods.index')}}"><img src="images/lost-find.jpg" alt="" style="width: 150px;height: 100px;" />
              <h3 class="am-gallery-title" style="text-align: center;">名字待定</h3>
            </a>
          </div>
        </li>
        <li style="text-align: center;">
          <div class="am-gallery-item">
            <a href="searchTa.html"><img src="images/find.jpg" alt="" style="width: 150px;height: 100px;" />
              <h3 class="am-gallery-title" style="text-align: center;">众里寻ta</h3>
            </a>
          </div>
        </li>
        <li style="text-align: center;">
          <div class="am-gallery-item">
           <a href="questionshow.html"><img src="images/question.jpg" alt="" style="width: 150px;height: 100px;" />
              <h3 class="am-gallery-title" style="text-align: center;">你问我答</h3>
            </a>
          </div>
        </li>
      </ul>
    </div>
    <div class="am-list-news-hd am-cf">
      <h2 style="border-left: 5px solid black;padding-left: 5px;">保护家园</h2>
    </div>
    <div class="am-list-news-bd">
      <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }">
        <li style="text-align: center;">
          <div class="am-gallery-item">
            <a href="protect.html"><img src="images/safe.jpg" alt="" style="width: 150px;height: 100px;" />
              <h3 class="am-gallery-title" style="text-align: center;">安全卫士</h3>
            </a>
          </div>
        </li>
      </ul>
    </div>
    <div class="am-list-news-hd am-cf">
      <h2 style="border-left: 5px solid black;padding-left: 5px;">装饰家园</h2>
    </div>
    <div class="am-list-news-bd">
      <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }">
        <li style="text-align:center">
          <div class="am-gallery-item">
            <a href="launch_story.html"><img src="http://s.amazeui.org/media/i/demos/bing-1.jpg" alt="" style="width: 150px;height: 100px;"/>
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
