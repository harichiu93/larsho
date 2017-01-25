<!DOCTYPE html>
<html lang="en">
@include('user.includes.head')

<body class="login-container">


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                @yield('content')

                <!-- Footer -->
                <div class="footer text-muted text-center">
                    &copy; 2016. By <a href="#" target="_blank">Chiu</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
