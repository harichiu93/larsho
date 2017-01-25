@extends('admin.layouts.default')
@section('content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Add Product</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="#" method="POST">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="product_name">Product Name</label>
                            <div class="controls">
                                <input class="input-xlarge" id="product_name" type="text" value="{{old('product_name')}}" name="product_name">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="price">Price</label>
                            <div class="controls">
                                <input class="input-xlarge" id="price" type="number" name="price" value="{{old('price')}}">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="stock">Stock</label>
                            <div class="controls">
                                <input class="input-xlarge" id="stock" type="number" name="stock" value="{{old('stock')}}">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="selectError">Category</label>
                            <div class="controls">
                                <select id="selectError" data-rel="chosen" name="category">
                                    {{--@foreach($categories as $category)--}}
                                        {{----}}
                                    {{--@endforeach--}}
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                            </div>
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="description">Description</label>
                            <div class="controls">
                                <textarea class="cleditor" id="description" rows="3" name="description"></textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="review">Review</label>
                            <div class="controls">
                                <textarea class="cleditor" id="review" rows="3" name="review"></textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="img">Image</label>
                            <div class="controls">
                                <input class="input-file uniform_on" id="img" type="file" name="img">
                            </div>
                        </div>



                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="{{action('Admin\Product@index')}}" class="btn">Cancel</a>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
@endsection