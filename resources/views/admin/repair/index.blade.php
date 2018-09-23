@extends("admin.layouts.main")

@section("css")

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>报修记录</h3>
                </div>
                <div class="card-body">
                    <table class="datatable table" cellspacing="0">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>地址</th>
                            <th>详细地址</th>
                            <th>报修物品</th>
                            <th>图片</th>
                            <th>报修人</th>
                            <th>备注</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($repairs as $repair)
                            <tr>
                                <td>{{$repair->id}}</td>
                                <td>{{$repair->address}}</td>
                                <td>{{$repair->address_detail}}</td>
                                <td>{{$repair->object}}</td>
                                <td><a href="{{asset("uploads/$repair->img")}}" target="_blank"><img src="{{asset("uploads/$repair->img")}}" alt="" width="100" height="50"></a></td>
                                <td><a href="{{url("adminmemberdetail")}}/{{$repair->user->id}}">{{$repair->user->name}}</a></td>
                                <td>{{$repair->detail}}</td>
                                <td>@if($repair->status==1) 已处理 @elseif($repair->status==0) 待处理 @else 无问题 @endif</td>
                                <td>
                                    <a href="{{url("admin/repair/$repair->id/1")}}"><input type="submit" value="设为已处理" class="btn btn-xs btn-success" onclick="return confirm('您确定要设置为已处理吗？')"></a>
                                    <a href="{{url("admin/repair/$repair->id/-1")}}"><input type="submit" value="设为无问题" class="btn btn-xs btn-primary" onclick="return confirm('您确定要设置为无问题吗？')"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection