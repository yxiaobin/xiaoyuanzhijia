@extends("admin.layouts.main")
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">用户审核</div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form class="form form-horizontal" method="post" action="#" enctype="multipart/form-data">

                        <div class="form-group">
                            <label class="col-md-2">姓名</label>
                            <div class="col-md-8 col-sm-12">
                                <input type="text" class="form-control" readonly value="{{$page->name}}" name="name" >
                                {{csrf_field()}}
                            </div>
                        </div>
                            <div class="form-group">
                                <label class="col-md-2">学号</label>
                                <div class="col-md-8 col-sm-12">
                                    <input type="text" class="form-control" readonly value="{{$page->stuid}}" name="company">
                                    {{csrf_field()}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2">专业班级</label>
                                <div class="col-md-8 col-sm-12">
                                    <input type="text" class="form-control"readonly value="{{$page->class}}" name="job">
                                    {{csrf_field()}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2">手机号</label>
                                <div class="col-md-8 col-sm-12">
                                    <input type="text" class="form-control" readonly value="{{$page->phone}}" name="motto">
                                    {{csrf_field()}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2">校园卡信息</label>
                                <div class="col-md-8 col-sm-12">
                                    @if($page->card_image != null)
                                    <img src="{{asset("uploads/$page->card_image")}}" style="width: 100px; height: 50px;">
                                    @else
                                    该用户还未上传学生证信息，无法通过审核
                                    @endif
                                </div>

                            </div>

                    <br>
                        <div class="form-footer">
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    @if($page->card_image != null)
                                    <a href="{{url("/memberyes/$page->id")}}" class="btn btn-primary">通过</a>
                                    @endif
                                        <a href="{{url("/memberno/$page->id")}}" class="btn btn-primary">不通过</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

