@extends('admin.base.base')

@section('title')
	Thêm nhóm loại tin
@endsection

@section('css')
  <link rel="stylesheet" href="bootstrap-select/dist/css/bootstrap-select.min.css" />
@endsection

@section('content')
	<div id="page-wrapper" style="padding-top: 30px">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm</h1>
            </div>
           
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thêm nhóm loại tin
                    </div>
                   
                    {{ showError($errors->all()) }}
                    
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-horizontal" action="admin/cate_group/insert" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <fieldset>
                                    <!-- Select Basic -->
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Tên nhóm loại tin</label>  
                                        <div class="col-md-4">
                                            <input id="txtName" name="txtName" placeholder="Nhập vào tên nhóm loại tin" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Keywords</label>  
                                        <div class="col-md-4">
                                            <input id="txtKeyWords" name="txtKeyWords" placeholder="Nhập vào keywords" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Mô tả</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" rows="5" id="txtDes" name="txtDes" placeholder="Nhập vào mô tả"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Nổi bật</label>
                                        <div class="col-md-4">
                                            <input id="input-1" type="checkbox" name="checkStatus">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="send"></label>
                                      <div class="col-md-4">
                                        <button id="insertCate" name="insertCate" class="btn btn-primary">Insert</button>
                                        <button id="reset" name="reset" class="btn btn-default">Reset</button>
                                      </div>
                                    </div>

                                    </fieldset>
                                    </form>

                            </div>
                        </div>
                        <!-- /.row (nested) -->
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
  <script src="bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
  <script src="js/validate.js" type="text/javascript"></script>
  <script src="bootstrap-checkbox/dist/js/bootstrap-checkbox.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $('#input-1').checkboxpicker();
    }); 
  </script>
@endsection

