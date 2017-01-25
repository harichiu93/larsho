@extends('user.includes.layout')
@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{url('user/password/reset')}}">
        {{csrf_field()}}
        <div class="panel panel-body login-form">
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="text-center">
                <h5 class="content-group">Thay đổi mật khẩu<small class="display-block">Vui lòng nhập mật khẩu mới.</small></h5>
            </div>
            @include('errors.note')
            <div class="form-group has-feedback">
                <input name="email" type="email" class="form-control" placeholder="Email" value="{{ $email or old('email') }}">
                <div class="form-control-feedback">
                    <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                </div>
            </div>

            <div class="form-group has-feedback has-feedback-left">
                <input name="password" type="password" class="form-control" placeholder="Mật khẩu">
                <div class="form-control-feedback">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
            </div>

            <div class="form-group has-feedback has-feedback-left">
                <input name="password_confirmation" type="password" class="form-control" placeholder="Nhập lại mật khẩu">
                <div class="form-control-feedback">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
            </div>



            <div class="form-group">
                <button type="submit" class="btn bg-blue btn-block">Thay đổi <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </div>

            <div class="form-group login-options">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="{{url('/')}}">Quay trở lại trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection