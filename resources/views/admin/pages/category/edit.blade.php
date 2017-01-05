@extends('admin.layouts.default')
@section('content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Create Category</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="category_name">Category Name</label>
                            <div class="controls">
                                <input class="input-xlarge" id="category_name" type="text" value="" name="cat_name">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="slug">Slug</label>
                            <div class="controls">
                                <input class="input-xlarge" id="slug" type="text" value="" name="slug">
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