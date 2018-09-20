@extends("admin.layouts.main")

@section("css")

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>兑换记录</h3>
                </div>
                <div class="card-body">
                    <table class="datatable table" cellspacing="0">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>商品名称</th>
                            <th>用户</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($records as $record)
                            <tr>
                                <td>{{$record->id}}</td>
                                <td>{{$record->good->name}}</td>
                                <td>{{$record->user->name}}</td>
                                <td>@if($record->status==1) 已兑换 @else 待兑换 @endif</td>
                                <td>
                                    @if($record->status==1)
                                        <a href="{{url("admin/record/$record->id/change")}}"><input type="submit" value="设为待兑换" class="btn btn-xs btn-danger" onclick="return confirm('您确定要设置为待兑换吗？')"></a>
                                    @else
                                        <a href="{{url("admin/record/$record->id/change")}}"><input type="submit" value="设为已兑换" class="btn btn-xs btn-danger" onclick="return confirm('您确定要设置为已兑换吗？')"></a>
                                    @endif
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