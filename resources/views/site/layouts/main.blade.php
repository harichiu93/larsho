<!DOCTYPE html>
<html lang="en">
<head>
    @include('site.includes.head')
</head>
<body>
    <div class="header-area">
        @include('site.includes.header')
    </div> <!-- End header area -->

    <div class="site-branding-area">
        @include('site.includes.brand')
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        @include('site.includes.menu')
    </div> <!-- End mainmenu area -->

    <!-- Area title or slide-->
    @include('site.includes.title')

    @yield('content')

    <div class="footer-top-area">
        @include('site.includes.footerTop')
    </div><!-- End footer top area -->

    <div class="footer-bottom-area">
        @include('site.includes.footerBottom')
    </div> <!-- End footer bottom area -->

    @include('site.includes.script')

    @yield('script')

</body>
</html>