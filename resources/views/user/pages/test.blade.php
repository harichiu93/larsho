@extends('user.includes.default')
@section('content')

        <div class="row">
            <div class="col-md-12">
                <!-- Search field -->
                <div class="panel panel-flat">

                    <div class="panel-body">
                        <form class="main-search" role="form" method="POST" action="#">
                            <input type="hidden" name="_token" value="2Z1IPk8u6iI8CH0hi1Co5tIYx4CE9cmndHfNKP9Q">
                            <div class="input-group content-group">
                                <div class="has-feedback has-feedback-left">
                                    <input type="text" class="form-control input-xlg" placeholder="Email chủ thể" name="keyword" value="" autofocus>
                                    <div class="form-control-feedback">
                                        <i class="icon-search4 text-muted text-size-base"></i>
                                    </div>
                                </div>

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-primary btn-xlg">Tìm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /search field -->
                <div class="panel panel-flat">
                    <div class="panel-body">
                        <table class="table table-togglable table-hover">
                            <thead>
                            <tr>
                                <th data-toggle="true">Email</th>
                                <th data-hide="phone">Họ tên</th>
                                <th data-hide="phone">Loại</th>
                                <th data-hide="phone">CMND</th>
                                <th class="text-center" style="width: 30px;"><i class="icon-menu-open2"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div style="text-align: center">

                    </div>
                </div>
            </div>
        </div>



@endsection