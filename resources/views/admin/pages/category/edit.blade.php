@extends('admin.layouts.default')
@section('content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Edit Category</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">

                <form class="form-horizontal" method="post" action="{{action('Admin\Category@edit')}}">
                    <input type="hidden" name="cat_id" value="{{$category['cat_id']}}" />
                    {{csrf_field()}}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="category_name">Category Name</label>
                            <div class="controls">
                                <input class="input-xlarge" id="category_name" type="text" value="{{$category['name']}}" name="cat_name">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="slug">Slug</label>
                            <div class="controls">
                                <input class="input-xlarge" id="slug" type="text" value="{{$category['slug']}}" name="slug">
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">description</label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" rows="3" name="description">{{$category['description']}}</textarea>
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
@endsection