@extends('admin.master')

@section('mainContent')

    <div class="row">
        <div class="col-lg-9 col-lg-offset-1 panel panel-default" style="margin-top:100px;">
            <br/>
            {{Session('message')}}
            <hr/>

            <form class="form-horizontal" action="{{url ('/category/update')}}" method="post" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$categoryById->category_name}}" name=category_name" class="form-control" id="category" placeholder="Category Name">
                        <input type="hidden" value="{{$categoryById->id}}" name="category_id" class="form-control" id="category" placeholder="Category Name">
                    </div>
                </div>



                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-2 control-label">Category Description</label>
                    <div class="col-sm-10">
                        <textarea name="category_description" class="form-control"  rows="5">{{$categoryById->category_description}}</textarea>
                    </div>
                </div>

                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-2 control-label">Category Status</label>
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