@extends('admin.base.base')

@section('title')
	Danh sách tin
@endsection

@section('css')
    <!-- DataTables CSS -->
    <link href="sb-admin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="sb-admin/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
@endsection

@section('content')
	<div id="page-wrapper" style="padding-top: 30px">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách tin
                    </div>
                    {{ showMessage() }}
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Loại tin</th>
                                    <th>Tiêu đề</th>
                                    <th>Ảnh</th>
                                    <th>Nguồn</th>
                                    <th>Mô tả</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($news as $item)
                                    <tr class="odd gradeX">
                                        <td>{{ $item->category->name }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td><image style="width: 100px" src="upload/news/{{ $item->image }}"></td>
                                        <td>{{ $item->source }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td style="text-align: center; border-right: 0">
                                            <a href="admin/news/update/{{ $item->id }}"><span class="glyphicon glyphicon-pencil"></span></a>
                                            <a href="admin/news/delete/{{ $item->id }}" style="color: red"><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                      
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                       
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
@endsection

@section('script')
    <!-- DataTables JavaScript -->
    <script src="sb-admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="sb-admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="sb-admin/vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
@endsection

