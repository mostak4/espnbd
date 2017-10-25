@extends('admin.master')

@section('mainContent')

    <div class="row">
        <div class="col-lg-9 col-lg-offset-1 panel panel-default" style="margin-top:100px;">
            <br/>
            {{Session('message')}}
            <hr/>

            <form class="form-horizontal" action="{{url ('/new-category')}}" method="post">
                {{csrf_field()}}
                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="category_name" class="form-control" id="category" placeholder="Category Name">
                    </div>
                </div>

                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-2 control-label">Category Description</label>
                    <div class="col-sm-10">
                        <textarea name="category_description" class="form-control"></textarea>
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
                        <button type="submit" class="btn btn-success">Save Category Info</button>
                    </div>
                </div>
            </form>


        </div>
        <!-- /.col-lg-12 -->
    </div>

    @endsection