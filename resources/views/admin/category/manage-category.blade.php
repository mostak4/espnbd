@extends('admin.master')

@section('mainContent')


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL NO</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Category Status</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php $i=1; ?>
                    @foreach($categories as $category)
                    <td>{{ $i }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>{{$category->category_description}}</td>
                    <td> {{$category->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                    <td class="center">
                        <a href="{{url ('/category/details'.$category->id)}}" class="btn btn-info btn-xs" title="View Category Details">
                            <span class="glyphicon glyphicon-zoom-in"></span>
                        </a>

                        @if($category->publication_status==1)

                            <a href="{{url ('/category/unpublished'.$category->id)}}" class="btn btn-success btn-xs" title="UnPublished Category">
                                <span class="glyphicon glyphicon-arrow-up"></span>
                            </a>
                        @else
                            <a href="{{url ('/category/published'.$category->id)}}" class="btn btn-warning btn-xs" title="Published Category">
                                <span class="glyphicon glyphicon-arrow-down"></span>
                            </a>

                        @endif
                        <a href="{{url ('/category/edit'.$category->id)}}" class="btn btn-primary btn-xs" title="Edit Category">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="{{url ('/category/delete'.$category->id)}}" class="btn btn-danger btn-xs" title="Delete Category">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>

                </tr>
                <?php $i++; ?>
                @endforeach
                </tfoot>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->


    <script type="text/javascript">
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>

    @endsection