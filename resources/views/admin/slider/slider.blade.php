@extends('admin.master');

@section('mainContent')

    <div class="row">
        <div class="col-lg-8 col-lg-offset-3 panel panel-default" style="margin-top:100px;">
            <br/>
            {{Session('message')}}
            <hr/>

            <form class="form-horizontal" action="{{url ('/slider/image')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group panel-body">


                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Slider Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="slider_image" accept="image/*">
                        </div>
                    </div>
                </div>
                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-2 control-label">Slider Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="publication_status">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>


                <div class="form-group panel-body">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Slider Image Save</button>
                    </div>
                </div>
            </form>


        </div>
        <!-- /.col-lg-12 -->
    </div>


@endsection