@extends('admin.layouts.default')
@section('content')


    <div class="row-fluid">
        <div class="box blue span12">
            <div class="box-header">
                <h2><i class="halflings-icon white white hand-top"></i><span class="break"></span>Quick Buttons</h2>
            </div>
            <div class="box-content">

                <a class="quick-button span2">
                    <i class="icon-group"></i>
                    <p>Users</p>
                    <span class="notification blue">1.367</span>
                </a>
                <a class="quick-button span2">
                    <i class="icon-comments-alt"></i>
                    <p>Comments</p>
                    <span class="notification green">167</span>
                </a>
                <a class="quick-button span2">
                    <i class="icon-shopping-cart"></i>
                    <p>Orders</p>
                </a>
                <a class="quick-button span2">
                    <i class="icon-barcode"></i>
                    <p>Products</p>
                </a>
                <a class="quick-button span2">
                    <i class="icon-envelope"></i>
                    <p>Messages</p>
                </a>
                <a class="quick-button span2">
                    <i class="icon-calendar"></i>
                    <p>Calendar</p>
                    <span class="notification red">68</span>
                </a>
                <div class="clearfix"></div>
            </div>
        </div><!--/span-->

    </div><!--/row-->



    <div class="row-fluid">
        <div class="box black span6 noMargin" onTablet="span6" onDesktop="span6">
            <div class="box-header">
                <h2><i class="halflings-icon white list"></i><span class="break"></span>Support tickets Metro</h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">

            </div>
        </div>
    </div>

@endsection