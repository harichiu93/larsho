<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="user-menu">
                <ul>
                    <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                    <li><a href="{{url('checkout')}}"><i class="fa fa-check" aria-hidden="true"></i></i> Thanh toán</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-7">
            <div class="header-right">
                <ul class="list-unstyled list-inline">
                    @if(Auth::check())
                        <li>Xin chào, {{Auth::user()->name}}</li>
                        <li><a href="{{url('user/profile')}}"><i class="fa fa-address-card-o" aria-hidden="true"></i> Tài khoản</a></li>
                        <li><a href="{{url('user/logout')}}"><i class="fa fa-power-off" aria-hidden="true"></i> Đăng xuất</a></li>
                    @else
                        <li><a href="{{url('user/login')}}"><i class="fa fa-user"></i> Đăng nhập</a></li>
                        <li><a href="{{url('user/register')}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Đăng ký</a></li>
                    @endif
                    {{--<li class="dropdown dropdown-small">--}}
                        {{--<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="#">English</a></li>--}}
                            {{--<li><a href="#">French</a></li>--}}
                            {{--<li><a href="#">German</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
    </div>
</div>