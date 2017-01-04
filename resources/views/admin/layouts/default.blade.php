<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.includes.head')
</head>
<body>

<!-- start: Header -->
    @include('admin.includes.header')
<!-- end: Header -->

<div class="container-fluid-full">
    <div class="row-fluid">
        @include('admin.layouts.sidebar')




        <!-- start: noscript -->
        @include('admin.includes.noscript')
        <!-- end: noscript -->

        <!-- start: Content -->
        <div id="content" class="span10">
            <!-- start: Breadcrumb -->
            @include('admin.includes.breadcrumb')
            <!-- end: Breadcrumb -->

            @yield('content')

        </div>
    </div>
    <!-- end: Content -->
</div>


<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>

<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <ul class="list-inline item-details">
            <li><a href="http://themifycloud.com">Admin templates</a></li>
            <li><a href="http://themescloud.org">Bootstrap themes</a></li>
        </ul>
    </div>
</div>

<div class="clearfix"></div>
<footer>
    @include('admin.includes.footer')
</footer>

@include('admin.includes.script')

</body>
</html>