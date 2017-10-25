@extends('admin.master')

@section('mainContent')

    <div class="row">
        <div class="col-lg-9 col-lg-offset-1 panel panel-default" style="margin-top:100px;">
            <br/>
            {{Session('message')}}
            <hr/>

            <form class="form-horizontal" action="{{url ('/new-user')}}" method="post" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="category" placeholder="User Name">
                    </div>
                </div>
                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-2 control-label">User Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="category" placeholder="User Email">
                    </div>
                </div>

                <div class="form-group panel-body">
                    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="category" placeholder="Password">
                    </div>
                </div>

                <div class="form-group panel-body">
                    <label for="inputPassword3" class="col-sm-2 control-label">Access Level</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="access_level">
                            <option>Select Access Level</option>
                            <option value="1">Super Admin</option>
                            <option value="2">Admin</option>
                            <option value="3">Executive</option>
                        </select>
                    </div>
                </div>

                <div class="form-group panel-body">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Save Admin Info</button>
                    </div>
                </div>
            </form>


        </div>
        <!-- /.col-lg-12 -->
    </div>

@endsection