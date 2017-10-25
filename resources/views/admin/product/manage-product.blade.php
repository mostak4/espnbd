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
                    <th>Product Name</th>
                    <th>Category Name</th>
                    <th>Product Price</th>
                    <th>Publication Status</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php $i=1; ?>
                    @foreach($products as $product)
                        <td>{{ $i }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{$product->category_name}}</td>
                        <td>{{$product->Product_price}}</td>
                        <td> {{$product->Publication_status == 1 ? 'Published':'Unpublished'}}</td>
                        <td class="center">
                            <a href="{{url ('/product/details'.$product->id)}}" class="btn btn-info btn-xs" title="View Category Details">
                                <span class="glyphicon glyphicon-zoom-in"></span>
                            </a>

                            @if($product->Publication_status==1)

                                <a href="{{url ('/product/unpublished'.$product->id)}}" class="btn btn-success btn-xs" title="UnPublished Category">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                            @else
                                <a href="{{url ('/product/published'.$product->id)}}" class="btn btn-warning btn-xs" title="Published Category">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>

                            @endif
                            <a href="{{url ('/product/edit'.$product->id)}}" class="btn btn-primary btn-xs" title="Edit Category">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            <a href="{{url ('/product/delete'.$product->id)}}" class="btn btn-danger btn-xs" title="Delete Category">
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