<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('/') }}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="sb-admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    
    
     @yield('css')

    <!-- Custom CSS -->
    <link href="sb-admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="sb-admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
            @include('admin.base.header')
            @include('admin.base.sidebar')
        </nav>

        @yield('content')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="sb-admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>

    

    <!-- Metis Menu Plugin JavaScript -->
    <script src="sb-admin/vendor/metisMenu/metisMenu.min.js"></script>

    @yield('script')
    
    <script src="js/message.js" type="text/javascript"></script>
    <!-- Custom Theme JavaScript -->
    <script src="sb-admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
