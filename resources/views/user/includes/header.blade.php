<div class="navbar-header">
    <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('public/img/logo.png')}}" alt=""></a>

    <ul class="nav navbar-nav visible-xs-block">
        <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-user-circle" aria-hidden="true"></i></a></li>
        {{--<li><a class="sidebar-mobile-main-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a></li>--}}
    </ul>
</div>

<div class="navbar-collapse collapse" id="navbar-mobile">

    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="{{url('/')}}">
                <i class="fa fa-home" aria-hidden="true"></i>
                <span>Trang chủ</span>
            </a>
        </li>

        <li class="dropdown dropdown-user">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>{{Auth::user()->name}}</span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="{{url('user/profile')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Thông tin cá nhân</a></li>
                <li><a href="{{url('user/password/change')}}"><i class="fa fa-unlock" aria-hidden="true"></i> Đổi mật khẩu</a></li>
                <li><a href="{{url('user/logout')}}"><i class="fa fa-power-off" aria-hidden="true"></i> Đăng xuất</a></li>
            </ul>
        </li>
        <li>
            <a href="{{url('cart')}}" class="text-orange">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng
            </a>
        </li>

        {{--<li>--}}
            {{--<a href="#">--}}
                {{--<i class="fa fa-bullhorn" aria-hidden="true"></i>--}}
                {{--<span>&nbsp;Báo lỗi và góp ý chức năng</span>--}}
            {{--</a>--}}
        {{--</li>--}}
    </ul>
</div>