@extends('admin.master')

@section('mainContent')

    <div class="row">
        <div class="col-lg-9 col-lg-offset-1 panel panel-default" style="margin-top:100px;">
            <br/>
            {{Session('message')}}
            <hr/>

            <form class="form-horizontal" action="{{url ('/feature/update')}}" method="post" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group panel-body">

                    <div class="col-sm-10">

                        <input type="hidden" value="{{$featureById->id}}" name="feature_id" class="form-control" id="category" >
                    </div>
                </div>
                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-2 control-label">Feature Image</label>
                    <div class="col-sm-10">

                        <input type="file" name="feature_image" class="form-control" id="category">
                            <img src="{{asset($featureById->feature_image)}}" style="height: 100px; width: 100px;">
                    </div>
                </div>
                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-2 control-label">Feature Title</label>
                    <div class="col-sm-10">

                        <input type="text" value="{{$featureById->feature_title}}" name="feature_title" class="form-control" id="category" placeholder="Feature Title">

                    </div>
                </div>



                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-2 control-label">Feature Description</label>
                    <div class="col-sm-10">
                        <textarea name="feature_description" class="form-control"  rows="5">{{$featureById->feature_description}}</textarea>
                    </div>
                </div>

                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-2 control-label">Feature Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="publication_status">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>

                <div class="form-group panel-body">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Update Feature Info</button>
                    </div>
                </div>
            </form>


        </div>
        <!-- /.col-lg-12 -->
    </div>

@endsection