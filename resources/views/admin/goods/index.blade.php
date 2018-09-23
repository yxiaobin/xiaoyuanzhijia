@extends("admin.layouts.main")

@section("css")

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-tab">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(session()->has($msg))
                        <div class="flash-message">
                            <p class="alert alert-{{ $msg }}">
                                {{ session()->get($msg) }}
                            </p>
                        </div>
                    @endif
                @endforeach
                <div class="card-header">
                    <ul class="nav nav-tabs">
                        @php if(session('tab')){
                            $tab = session('tab');
                        }
                        @endphp
                        <li role="tab1" style="width:160px" class="@if($tab==1){{"active"}}@endif">
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">查看全部商品</a>
                        </li>
                        <li role="tab2" style="width: 180px" class="@if($tab==2){{"active"}}@endif">
                            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">添加新的商品</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body no-padding tab-content">

                    <div role="tabpanel" class="tab-pane @if($tab==1){{"active"}}@endif" id="tab1" style="padding-top: 100px">
                        <table class="datatable table" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>编号</th>
                                <th>名称</th>
                                <th>图片</th>
                                <th>兑换积分</th>
                                <th>地点</th>
                                <th>库存</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($goods as $good)
                                <tr>
                                    <td>{{$good->id}}</td>
                                    <td>{{$good->name}}</td>
                                    <td><img src="{{asset("uploads/$good->img")}}" alt="" width="100" height="50"></td>
                                    <td>{{$good->price}}</td>
                                    <td>{{$good->address}}</td>
                                    <td>{{$good->num}}</td>
                                    <td>
                                        <form action="{{url('admin/goods')}}/{{$good->id}}" style="display: inline" method="post">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <input type="submit" value="删除" class="btn btn-xs btn-danger" onclick="return confirm('您确定要删除吗？')">
                                        </form>
                                        <a href="{{url('admin/goods')}}/{{$good->id}}/edit">
                                            <input type="button" value="修改" class="btn btn-xs btn-primary">
                                        </a>
                                        @if($good->show == 0)
                                            <a href="{{url('admin/good')}}/{{$good->id}}/change">
                                                <input type="button" value="设为推荐" class="btn btn-xs btn-success">
                                            </a>
                                        @else
                                            <a href="{{url('admin/good')}}/{{$good->id}}/change">
                                                <input type="button" value="取消推荐" class="btn btn-xs btn-warning">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div role="tabpanel" class="tab-pane @if($tab==2){{"active"}}@endif" id="tab2">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="section">
                                    <div class="section-title"><i class="icon fa fa-user" aria-hidden="true"></i>请填写商品信息</div>
                                    <div class="section-body __indent">
                                        <form class="form form-horizontal" method="post" action="{{url('admin/goods')}}" enctype="multipart/form-data">
                                            <div class="section">
                                                <div class="section-title"></div>
                                                <div class="section-body">
                                                    @if (count($errors) > 0)
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">商品名称</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="项目名称" name="name" value="{{old('name')}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">商品图片 <span class="size">（415x450）</span></label>
                                                        <div class="col-md-9">
                                                            <input type="file" name="img" accept="image/gif,image/jpeg,image/png,image/webp" class="form-control" placeholder="简体">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">价格</label>
                                                        <div class="col-md-9">
                                                            {{csrf_field()}}
                                                            <input type="text" class="form-control" placeholder="价格" name="price" value="{{old('price')}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">地址</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="地址" name="address" value="{{old('address')}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">库存</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control" placeholder="库存" name="num" value="{{old('num')}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">商品介绍</label>
                                                        <div class="col-md-9">
                                                           @include('admin/layouts/Ueditor')
                                                        </div>
                                                    </div>
                                                    <div class="form-footer">
                                                        <div class="form-group">
                                                            <div class="col-md-9 col-md-offset-3">
                                                                <input type="submit" class="btn btn-primary" value="添加商品">
                                                                <input type="button" class="btn btn-default" value="取消">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        //实例化编辑器
        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
        //var ue = UE.getEditor('editor');
        var ue = UE.getEditor('editor',{toolbars: [[
                'source',//源代码
                'undo',//撤回一步
                'redo',//前进一步
                'bold',//粗体
                'italic',//斜体
                'underline',//下划线
                'fontborder',//字体边框
                'strikethrough',//删除线
                'subscript',//下标
                'superscript',//上标
                'forecolor', //字体颜色
                'fontfamily',//字体
                'fontsize',//字体大小
                'formatmatch',//格式刷
                'touppercase', //字母大写
                'tolowercase', //字母小写
                'link',//超链接
                'unlink',//取消超链接
                'searchreplace',//查询替换
                'selectall'],//全选

                ['indent',//首行缩进
                    'justifyleft', //居左对齐
                    'justifycenter', //居中对齐
                    'justifyright', //居右对齐
                    'justifyjustify', //两端对齐
                    'blockquote',//引用
                    'preview',//预览
                    'horizontal',//分割线
                    'insertcode',//代码语言
                    'paragraph',//段落格式
                    'simpleupload',//单个图片上传
                    'insertimage',//多个图片上传
                    'imagecenter', //居中
                    'insertvideo',//视频上传
                    'emotion',//表情
                    'map',//地图
                    'backcolor',//背景色
                    'lineheight', //行间距
                    'edittip ', //编辑提示
                    'customstyle', //自定义标题
                    'autotypeset',//自动排版

                    'background', //背景
                    'template', //模板
                    'scrawl', //涂鸦
                    'time', //时间
                    'date', //日期
                    'snapscreen',
                    'attachment'
                ]]});
        ue.ready(function() {
            //设置编辑器的内容
            ue.execCommand("inserthtml",'{!! "" !!}') ;
        });
    </script>
@endsection