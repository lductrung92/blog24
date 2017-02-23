@extends('admin.base.base')

@section('title')
Cập nhật tin tức
@endsection

@section('css')
<link rel="stylesheet" href="bootstrap-select/dist/css/bootstrap-select.min.css" />
<link rel="stylesheet" href="bootstrap-fileinput/css/fileinput.min.css" />
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
                    Cập nhật tin tức
                </div>
                
                {{ showError($errors->all()) }}
                
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal" action="admin/news/update/{{ $news->id }}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Nhóm loại tin</label>
                                        <div class="col-md-4">
                                            <select class="form-control selectpicker" id="selParentG">
                                                <option value="0">Chọn nhóm loại tin</option>
                                                {{ showParentName($cateGs, $news->category->cateGroup->id) }}
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Loại tin</label>
                                        <div class="col-md-4">
                                            <select class="form-control" name="selParent" id="sel">
                                                <option value="0">Chọn loại tin</option>
                                                {{ showParentName($cates, $news->category->id) }}
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Tiêu đề</label>  
                                        <div class="col-md-4">
                                            <input id="txtTitle" name="txtTitle" placeholder="Nhập vào tiêu đề tin" class="form-control input-md" required="" type="text" value="{{ $news->title }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Nguồn</label>  
                                        <div class="col-md-4">
                                            <input id="txtSource" name="txtSource" placeholder="Nhập vào nguồn trang" class="form-control input-md" required="" type="text" value="{{ $news->source }}">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Ảnh đại diện</label>  
                                        <div class="col-md-4">
                                            <input type="file" class="file" name="fImage">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Mô tả</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" rows="5" id="txtDes" name="txtDes" placeholder="Nhập vào mô tả">{{ $news->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Nổi bật</label>
                                        <div class="col-md-4">
                                            <input id="input-1" type="checkbox" name="checkStatus">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <textarea class="form-control" rows="10" id="ckeditor-1" name="txtContent">{{ $news->content }}</textarea>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="send"></label>
                                      <div class="col-md-4">
                                        <button id="insertNews" name="insertNews" class="btn btn-primary">Update</button>
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
<script src="bootstrap-checkbox/dist/js/bootstrap-checkbox.min.js"></script>
<script src="bootstrap-fileinput/js/fileinput.js" type="text/javascript"></script>
<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('ckeditor-1');
    $(document).ready(function() {
        $("#selParentG").change(function() {
            var $id = $("#selParentG").val();            
            $.get('admin/ajax/' + $id, function(data) {
                
                $("#sel").html(data);
                
            });
        });
        $('#input-1').checkboxpicker();
    }); 
</script>
<script src="js/validate.js" type="text/javascript"></script>

@endsection

