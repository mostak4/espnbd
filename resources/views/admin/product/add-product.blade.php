@extends('admin.master')

@section('mainContent')

    <div class="row">
        <div class="col-lg-9 col-lg-offset-1 panel panel-default" style="margin-top:100px;">
            <br/>
            {{Session('message')}}
            <hr/>

            <form class="form-horizontal" action="{{url ('/new-product')}}" method="post" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-2 control-label">Category Name</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="category_id">
                            <option value="">--Select Category Name--</option>
                            @foreach($publushedCategories as $publushedCategory)

                                <option value="{{$publushedCategory->id}}">{{$publushedCategory->category_name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="product_name" class="form-control" id="category" placeholder="Product Name">
                    </div>
                </div>
                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-2 control-label">Product Code</label>
                    <div class="col-sm-10">
                        <input type="text" name="product_code" class="form-control" id="category" placeholder="Product Code">
                    </div>
                </div>

                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-2 control-label">Product Price</label>
                    <div class="col-sm-10">
                        <input type="number" name="Product_price" class="form-control" id="category" placeholder="Product Price">
                    </div>
                </div>
                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-2 control-label">Product Description</label>
                    <div class="col-sm-10">
                        <textarea name="Product_description" class="form-control"  rows="5"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Product Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="product_image" accept="image/*">
                    </div>
                </div>

                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-2 control-label">Product Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="publication_status">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>

                <div class="form-group panel-body">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Save Product Info</button>
                    </div>
                </div>
            </form>


        </div>
        <!-- /.col-lg-12 -->
    </div>

@endsection