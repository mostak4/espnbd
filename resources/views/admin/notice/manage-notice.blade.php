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
                    <th>Notice Title</th>
                    <th>Author Name</th>

                    <th>Publication Status</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php $i=1; ?>
                    @foreach($notices as $notice)
                        <td>{{ $i }}</td>
                        <td>{{ $notice->notice_title }}</td>
                        <td>{{$notice->author_name}}</td>
                        <td> {{$notice->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                        <td class="center">
                            <a href="{{url ('/notice/details'.$notice->id)}}" class="btn btn-info btn-xs" title="View Notice Details">
                                <span class="glyphicon glyphicon-zoom-in"></span>
                            </a>

                            @if($notice->publication_status==1)

                                <a href="{{url ('/notice/unpublished'.$notice->id)}}" class="btn btn-success btn-xs" title="UnPublished Notice">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                            @else
                                <a href="{{url ('/notice/published'.$notice->id)}}" class="btn btn-warning btn-xs" title="Published Notice">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>

                            @endif
                            <a href="{{url ('/notice/delete'.$notice->id)}}" class="btn btn-danger btn-xs" title="Delete Notice">
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