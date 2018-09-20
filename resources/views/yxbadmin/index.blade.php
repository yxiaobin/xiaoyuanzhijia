@extends("admin.layouts.main")
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">审核列别</div>
                <div class="card-body">
                    <table class=" table">
                        <thead>
                        <th>名称</th>
                        <th>学号</th>
                        <th>学院</th>
                        <th>班级</th>
                        <th>操作</th>
                        </thead>
                        <tbody>
                        @foreach($pages as $page)
                            <tr>
                                <td>
                                    {{$page->name}}
                                </td>
                                <td>
                                    {{$page->stuid}}
                                </td>
                                <td>
                                    {{$page->school}}
                                </td>
                                <td>
                                    {{$page->class}}
                                </td>
                                <td>
                                    <a href="{{url("adminmemberdetail/$page->id")}}" target="view_window" class="btn btn-primary btn-xs" role="button">
                                        查看详情
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

