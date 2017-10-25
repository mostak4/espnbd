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
                    <th>Slider Image</th>
                    <th>Publication Status </th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php $i=1; ?>
                    @foreach($sliders as $slider)
                            <td>{{$i}}</td>
                            <td><img style="height: 100px; width: 200px;" src="{{ asset($slider->slider_image) }}"/></td>
                            <td class="center">{{$slider->publication_status==1 ? 'Published':'Unpublished'}}</td>
                        <td class="center">


                            @if($slider->publication_status==1)

                                <a href="{{url ('/slider/unpublished'.$slider->id)}}" class="btn btn-success btn-xs" title="UnPublished Slider Image">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                            @else
                                <a href="{{url ('/slider/published'.$slider->id)}}" class="btn btn-warning btn-xs" title="Published Slider Image">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>

                            @endif

                            <a href="{{url ('/slider/delete'.$slider->id)}}" class="btn btn-danger btn-xs" title="Delete Slider Image">
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