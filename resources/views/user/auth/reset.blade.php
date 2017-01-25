@extends('user.includes.layout')
@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{url('user/password/email')}}">
        {{csrf_field()}}
        <div class="panel panel-body login-form">

            <div class="text-center">
                <h5 class="content-group">Quên mật khẩu? <small class="display-block">Nhập email để nhận mật khẩu mới.</small></h5>
            </div>
            @include('errors.note')
            <div class="form-group has-feedback">
                <input name="email" type="email" class="form-control" placeholder="Your email">
                <div class="form-control-feedback">
                    <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn bg-blue btn-block">Gửi mail <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
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