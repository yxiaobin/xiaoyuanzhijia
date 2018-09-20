<aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header">
        <a class="sidebar-brand" href="#"><span class="highlight">萌芽</span> 管理系统</a>
        <button type="button" class="sidebar-toggle">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <div class="sidebar-menu">
        <ul class="sidebar-nav">
            <li class="">
                <a href="{{url('/admin/home')}}">
                    <div class="icon">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                    </div>
                    <div class="title">首页</div>
                </a>
            </li>
            <li class="">
                <a href="{{url('/')}}" target="_blank">
                    <div class="icon">
                        <i class="fa fa-link"  aria-hidden="true"></i>
                    </div>
                    <div class="title">查看网站</div>
                </a>
            </li>
            <li class="dropdown  ">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="title">用户管理</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="{{url("/adminmember")}}">用户审核</a></li>
                        {{--<li><a href="">信息发送</a></li>--}}
                    </ul>
                </div>
            </li>
            <li class="dropdown  ">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="title">内容管理</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="{{url('admin/goods')}}" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-link"  aria-hidden="true"></i>
                    </div>
                    <div class="title">商品管理</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="{{url('admin/goods')}}">商品管理</a></li>
                        <li><a href="{{url('admin/record')}}">商品兑换管理</a></li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</aside>