<!DOCTYPE html>
<html lang="en">
    @include('user.includes.head')
    <body class="sidebar-xs">
        <!-- Main navbar -->
        <div class="navbar navbar-default header-highlight">
            @include('user.includes.header')
        </div>
        <!-- /main navbar -->

        <!-- Page container -->
        <div class="page-container">
            <!-- Page content -->
            <div class="page-content">
                <!-- Main sidebar -->
                {{--<div class="sidebar sidebar-main">--}}
                    {{--@include('user.includes.sidebar')--}}
                {{--</div>--}}
                <!-- /main sidebar -->

                <!-- Main content -->
                <div class="content-wrapper">
                    <!-- Content area -->
                    <div class="content">
                        <!-- Page header -->
                        @include('user.includes.PageHeader')
                        <!-- /page header -->
                        @yield('content')

                        <!-- Footer -->
                        <div class="footer text-muted text-center">
                            &copy; 2016. By <a href="{{url('/')}}" target="_blank">Chiu</a>
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


        <script type="text/javascript">
            jQuery(document).ready(function(){

                jQuery(".month").click(function(){
                    jQuery(".month").attr("src", "{{url('public/user/imgs/checkbox-no.png')}}");
                    jQuery(".mobile_month").attr("src", "{{url('public/user/imgs/checkbox-no.png')}}");
                    jQuery(this).attr("src", "{{url('public/user/imgs/checkbox-yes.png')}}");
                    jQuery("#mobilemonth"+jQuery(this).attr("alt")).attr("src", "{{url('public/user/imgs/checkbox-yes.png')}}");
                    jQuery("#month").val(jQuery(this).attr("alt"));
                });

                jQuery(".hostos").click(function(){
                    jQuery(".hostos").attr("src", "{{url('public/user/imgs/checkbox-no.png')}}");
                    jQuery(".mobile_hostos").attr("src", "{{url('public/user/imgs/checkbox-no.png')}}");
                    jQuery(this).attr("src", "{{url('public/user/imgs/checkbox-yes.png')}}");
                    jQuery("#mobileos"+jQuery(this).attr("alt")).attr("src", "{{url('public/user/imgs/checkbox-yes.png')}}");
                    jQuery("#hostos").val(jQuery(this).attr("alt"));
                });
            });

        </script>
        <!-- Theme JS files -->
        <script type="text/javascript" src="{{url('public/user/js/footable.min.js')}}"></script>

        <script type="text/javascript" src="{{url('public/user/js/app.js')}}"></script>
        <script type="text/javascript" src="{{url('public/user/js/table_responsive.js')}}"></script>
        <!-- /theme JS files -->
    </body>
</html>