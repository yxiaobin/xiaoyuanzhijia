
<nav class="navbar navbar-default" id="navbar">
    <div class="container-fluid">
        <div class="navbar-collapse collapse in">
            <ul class="nav navbar-nav navbar-mobile">
                <li>
                    <button type="button" class="sidebar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                </li>
                <li class="logo">
                    <a class="navbar-brand" href="#"><span class="highlight">校园之家</span> Admin</a>
                </li>
                <li>
                    <button type="button" class="navbar-toggle">
                        <img class="profile-img" src="{{asset('assets/images/profile.png')}}/">
                    </button>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li class="navbar-title">校园之家</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown profile">
                    <a href="" class="dropdown-toggle"  data-toggle="dropdown">
                        <img class="profile-img" src="{{asset('images/defaulticon.png')}}">
                        <div class="title">个人资料</div>
                    </a>
                    <div class="dropdown-menu">
                        <div class="profile-info">
                            <h4 class="username"></h4>
                        </div>
                        <ul class="action">
                            <li>
                                <a href="{{url('/admin/logout')}}">
                                    退出
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>