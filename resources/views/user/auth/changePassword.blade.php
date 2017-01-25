@extends('user.includes.default')
@section('content')
    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-body">
            {{$success or ''}}
            @include('errors.note')
            <form class="form-horizontal" role="form" method="POST" action="{{url('user/password/change')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="control-label col-lg-2">Mật khẩu cũ</label>
                    <div class="col-lg-10">
                        <input name="old_password" type="password" class="form-control" placeholder="Nhập mật khẩu cũ" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Mật khẩu mới</label>
                    <div class="col-lg-10">
                        <input name="password" type="password" class="form-control" placeholder="Nhập mật khẩu mới" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Nhập lại mật khẩu mới</label>
                    <div class="col-lg-10">
                        <input name="password_confirmation" type="password" class="form-control" placeholder="Nhập lại mật khẩu mới" required>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary bg-blue">Cập nhật <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /form horizontal -->
@endsection