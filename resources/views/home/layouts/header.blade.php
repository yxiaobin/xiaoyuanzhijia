<!-- 顶部 -->
<header data-am-widget="header" class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        <a href="#" onclick="javascript:history.back(-1)">
            {{--<span class="am-icon-home"></span>--}}
            {{--<span  class="am-navbar-label"></span>--}}
            <img src="{{asset('images/back.png')}}" alt="" style="width: 20px;height: 20px;">
        </a>
    </div>
    <h1 class="am-header-title">
            {{$header}}
    </h1>
    </nav>
</header>