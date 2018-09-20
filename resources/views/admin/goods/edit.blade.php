@extends("admin.layouts.main")
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="icon fa fa-user" aria-hidden="true"></i>修改商品信息</div>
                <div class="card-body __indent" style="padding: 0 16.66667%;">
                    <form class="form form-horizontal" method="post" action="{{url('admin/goods')}}/{{$good->id}}" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="section">
                            <div class="section-title"></div>
                            <div class="section-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">商品名称</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="商品名称" name="name" value="{{$good->name}}">
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

                                        <input type="text" class="form-control" placeholder="价格" name="price" value="{{$good->price}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">地址</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="地址" name="address" value="{{$good->address}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">库存</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" placeholder="库存" name="num" value="{{$good->num}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">商品介绍</label>
                                    <div class="col-md-9">
                                        <textarea rows="20" cols="50" class="form-control" name="content" value="{{$good->content}}"></textarea>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <div class="form-group">
                                        <div class="col-md-9 col-md-offset-3">
                                            <input type="submit" class="btn btn-primary" value="保存">
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

@endsection

