<!DOCTYPE html>
<html>
<head>
  <title>用户登录</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="{{asset("/admin/css/vendor.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("admin/css/flat-admin.css")}}">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="{{asset("admin/css/theme/blue-sky.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("admin/css/theme/blue.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("admin/css/theme/red.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("admin/css/theme/yellow.css")}}">
</head>
<body>
  <div class="app app-default">

<div class="app-container app-login">
  <div class="flex-center">
    <div class="app-header"></div>
    <div class="app-body">
      <div class="loader-container text-center">
          <div class="icon">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
              </div>
            </div>
          <div class="title">Logging in...</div>
      </div>
      <div class="app-block">
      <div class="app-form">
          @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(session()->has($msg))
                  <div class="flash-message">
                      <p class="alert alert-{{ $msg }}">
                          {{ session()->get($msg) }}
                      </p>
                  </div>
              @endif
          @endforeach
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
        <div class="form-header">
          <div class="app-brand"><img src="{{asset('/images/logo.jpg')}}" width="200px"></div>
        </div>

          <form action="{{url('admin/login')}}" method="post">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="用户名" aria-describedby="basic-addon1" name="username">
                {{csrf_field()}}
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon2">
                <i class="fa fa-key" aria-hidden="true"></i></span>
              <input type="password" class="form-control" placeholder="密码" aria-describedby="basic-addon2" name="password">
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-success btn-submit" value="登录">
            </div>
        </form>

      </div>
      </div>
    </div>
    <div class="app-footer">
    </div>
  </div>
</div>

  </div>
  <script type="text/javascript" src="{{asset("/assets/js/app.js")}}"></script>

</body>
</html>
