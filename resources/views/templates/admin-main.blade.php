<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>Dashboard</title>

        <link rel="stylesheet" href="/css/admin/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/ionicons.min.css">
        <link rel="stylesheet" href="/css/AdminLTE.min.css">
        <link rel="stylesheet" href="/css/skins/_all-skins.min.css">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    <body class="hold-transition skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            @include('templates.partials.admin-header')

            @include('templates.partials.admin-main-sidebar')

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>Dashboard</h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div><!-- /.content-wrapper -->

            @include('templates.partials.admin-footer')

            @include('templates.partials.admin-control-sidebar')

        </div>
        <!-- ./wrapper -->

        <script src="/js/jquery.min.js"></script>
        <script src="/js/admin/bootstrap.min.js"></script>
        <script src="/js/jquery.slimscroll.min.js"></script>
        <script src="/js/fastclick.js"></script>
        <script src="/js/adminlte.min.js"></script>
        <script src="/js/demo.js"></script>
        <script>
            $(document).ready(function () {
                $('.sidebar-menu').tree()
            })
        </script>
    </body>
</html>
