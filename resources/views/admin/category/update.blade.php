@extends('admin.base.base')

@section('title')
  Cập nhật loại tin
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
                        Cập nhật loại tin
                    </div>

                    {{ showError($errors->all()) }}
                    
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-horizontal" action="admin/category/update/{{ $cate->id }}" method="post">
                                
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <fieldset>
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Loại tin</label>
                                        <div class="col-md-4">
                                            <select class="form-control selectpicker" name="selParent">
                                                <option value="0">Chọn loại tin</option>
                                                {{ showParentName($cateGs, $cate->id) }}
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Tên loại tin</label>  
                                        <div class="col-md-4">
                                            <input id="txtName" name="txtName" placeholder="Nhập vào tên loại tin" class="form-control input-md" required="" value="{{ $cate->name }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Keywords</label>  
                                        <div class="col-md-4">
                                            <input id="txtKeyWords" name="txtKeyWords" placeholder="Nhập vào keywords" class="form-control input-md" required="" value="{{ $cate->keywords }}" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Description</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" rows="5" id="txtDes" name="txtDes" placeholder="Nhập vào mô tả">{{ $cate->description }}</textarea>
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
  
@endsection

