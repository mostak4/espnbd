@extends('admin.master')

@section('mainContent')

    <div class="row">
        <div class="col-lg-9 col-lg-offset-1 panel panel-default" style="margin-top:100px;">
            <br/>
            {{Session('message')}}
            <hr/>

            <form class="form-horizontal" action="{{url ('/new-features')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}



                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-3 control-label">Features Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="feature_image" class="form-control" id="category" accept="image/*">
                    </div>
                </div>
                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-3 control-label">Features Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="feature_title" class="form-control" id="category" placeholder="Features Title">
                    </div>
                </div>

                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-3 control-label">Features Description</label>
                    <div class="col-sm-9">
                        <textarea name="feature_description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-3 control-label">Category Status</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="publication_status">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>

                <div class="form-group panel-body">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-success">Save Our Features info</button>
                    </div>
                </div>
            </form>


        </div>
        <!-- /.col-lg-12 -->
    </div>

@endsection