@extends('user.includes.layout')
@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{url('user/register')}}">
        {{csrf_field()}}
        <div class="panel panel-body login-form">
            <div class="text-center">
                <h5 class="content-group">Đăng Ký Tài Khoản
                    <small class="display-block">Để sử dụng những tính năng riêng biệt</small>
                </h5>
            </div>
            @include('errors.note')

            <div class="form-group has-feedback has-feedback-left">
                <input name="email" type="email" class="form-control" placeholder="Email" value="{{old('email')}}">
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

            <div class="form-group has-feedback has-feedback-left">
                <input name="name" type="text" class="form-control" placeholder="Họ tên" value="{{old('name')}}">
                <div class="form-control-feedback">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                </div>
            </div>

            <div class="form-group has-feedback has-feedback-left">
                <input name="phone" type="text" class="form-control" placeholder="Điện thoại" value="{{old('phone')}}">
                <div class="form-control-feedback">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn bg-blue btn-block">Đăng ký <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </div>

            <a href="{{url('user/login')}}" class="btn btn-default btn-block content-group">Quay lại trang đăng nhập</a>
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