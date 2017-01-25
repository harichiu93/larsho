@extends('user.includes.layout')
@section('content')

    <!-- Advanced login -->
    <form class="form-horizontal" role="form" method="POST" action="{{url('user/login')}}">
        {{csrf_field()}}
        <div class="panel panel-body login-form">
            <div class="text-center">
                <h5 class="content-group">Đăng nhập tài khoản
                    <small class="display-block">Để sử dụng những tính năng riêng biệt</small>
                </h5>
            </div>
            @include('errors.note')
            <div class="form-group has-feedback has-feedback-left">
                <input name="email" type="email" class="form-control" placeholder="Email" value="{{old('email')}}" required>
                <div class="form-control-feedback">
                    <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                </div>
            </div>

            <div class="form-group has-feedback has-feedback-left">
                <input name="password" type="password" class="form-control" placeholder="Mật khẩu" required>
                <div class="form-control-feedback">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
            </div>

            <div class="form-group login-options">
                <div class="row">
                    <div class="col-sm-5 text-right">
                        <a href="{{url('user/password/reset')}}">Quên mật khẩu?</a>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn bg-blue btn-block">Đăng nhập <i class="fa fa-arrow-right"
                                                                                 aria-hidden="true"></i></button>
            </div>

            <div class="content-divider text-muted form-group"><span>Bạn chưa có tài khoản?</span></div>
            <a href="{{url('user/register')}}" class="btn btn-default btn-block content-group">Đăng ký mới</a>
            <div class="form-group login-options">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="{{url('/')}}">Quay trở lại trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- /advanced login -->
@endsection
