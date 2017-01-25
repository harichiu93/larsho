@extends('admin.layouts.default')
@section('content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="fa fa-list white user"></i><span class="break"></span>Category</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>

            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable" id="category">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($products as $product)
                        <tr cat-id="{{$list->cat_id}}">
                            <td>{{$list->cat_id}}</td>
                            <td class="center">{{$list->name}}</td>
                            <td class="center">{{$list->slug}}</td>
                            <td class="center">
                                <a class="btn btn-info" href="{{route('catEdit' , ['id' => $list->cat_id])}}">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <a class="btn btn-danger" onClick="confirmDelete('{{route('catDel' , ['id' => $list->cat_id])}}')">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection