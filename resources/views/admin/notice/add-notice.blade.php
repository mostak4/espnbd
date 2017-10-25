@extends('admin.master')

@section('mainContent')

    <div class="row">
        <div class="col-lg-9 col-lg-offset-1 panel panel-default" style="margin-top:100px;">
            <br/>
            {{Session('message')}}
            <hr/>

            <form class="form-horizontal" action="{{url ('/new-notice')}}" method="post" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-3 control-label">Notice Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="notice_title" class="form-control" id="category" placeholder="Notice Title">
                    </div>
                </div>
                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-3 control-label">Author Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="author_name" class="form-control" id="category" placeholder="Author Name">
                    </div>
                </div>


                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-3 control-label">Notice Description</label>
                    <div class="col-sm-9">
                        <textarea name="notice_description" class="form-control"  rows="5"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Notice Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="notice_image" accept="image/*">
                    </div>
                </div>

                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-3 control-label">Notice Status</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="publication_status">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>

                <div class="form-group panel-body">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-success">Save Notice Info</button>
                    </div>
                </div>
            </form>


        </div>
        <!-- /.col-lg-12 -->
    </div>

@endsection