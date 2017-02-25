@extends('admin.base.base')

@section('title')
	Danh sách thành viên
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
                        Danh sách thành viên
                    </div>
                    {{ showMessage() }}
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr class="odd gradeX">
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td style="text-align: center; border-right: 0">
                                            <a href="admin/cate_group/update/{{ $user->id }}"><span class="glyphicon glyphicon-pencil"></span></a>
                                            <a href="admin/cate_group/delete/{{ $user->id }}" style="color: red"><span class="glyphicon glyphicon-trash"></span></a>
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

