@extends('admin.base.base')

@section('title')
	Thêm thành viên
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
                        Thêm thành viên
                    </div>
                   
                    {{ showError($errors->all()) }}
                    
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-horizontal" action="admin/user/insert" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <fieldset>
                                    <!-- Select Basic -->
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Email</label>  
                                        <div class="col-md-4">
                                            <input id="txtEmail" name="txtEmail" placeholder="Nhập email của bạn" class="form-control input-md" required="" type="email">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Usernam</label>  
                                        <div class="col-md-4">
                                            <input id="txtUsername" name="txtUsername" placeholder="Nhập vào username" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Password</label>  
                                        <div class="col-md-4">
                                            <input id="txtPassword" name="txtPassword" placeholder="Nhập vào Password" class="form-control input-md" required="" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">PasswordAgain</label>  
                                        <div class="col-md-4">
                                            <input id="txtPasswordAgain" name="txtPasswordAgain" placeholder="Nhập lại Password" class="form-control input-md" required="" type="password">
                                        </div>
                                    </div>
                                    
                                    <!-- Button -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="send"></label>
                                      <div class="col-md-4">
                                        <button id="insertUser" name="insertUser" class="btn btn-primary">Insert</button>
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

