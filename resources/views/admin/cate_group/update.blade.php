@extends('admin.base.base')

@section('title')
  Cập nhật nhóm loại tin
@endsection

@section('css')
  <link rel="stylesheet" href="bootstrap-select/dist/css/bootstrap-select.min.css" />
@endsection

@section('content')
  <div id="page-wrapper" style="padding-top: 30px">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cập nhật</h1>
            </div>
           
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Cập nhật nhóm loại tin
                    </div>

                    {{ showError($errors->all()) }}
                    
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-horizontal" action="admin/cate_group/update/{{ $cateG->id }}" method="post">
                                
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <fieldset>
                                    

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Tên nhóm loại tin</label>  
                                        <div class="col-md-4">
                                            <input id="txtName" name="txtName" placeholder="Nhập vào tên nhóm loại tin" class="form-control input-md" required="" value="{{ $cateG->name }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Keywords</label>  
                                        <div class="col-md-4">
                                            <input id="txtKeyWords" name="txtKeyWords" placeholder="Nhập vào keywords" class="form-control input-md" required="" value="{{ $cateG->keywords }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Description</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" rows="5" id="txtDes" name="txtDes" placeholder="Nhập vào mô tả">{{ $cateG->description }}</textarea>
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
                                        <button id="insertCate" name="insertCate" class="btn btn-primary">Update</button>
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
  <script type="text/javascript">
    $(document).ready(function() {
        $('#input-1').checkboxpicker();
    }); 
  </script>
@endsection

