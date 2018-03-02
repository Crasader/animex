<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Animex</title>

        <meta name="description" content="">

        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="/css/clean-blog.min.css" rel="stylesheet">
    </head>
    <body>
        @include('pages.partials.page-main-menu')

        @include('pages.partials.page-main-header')

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    @yield('content')
                    <hr>
                    <!-- Pager -->
                    <div class="clearfix">
                        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        @include('pages.partials.page-footer')

        <!-- Bootstrap core JavaScript -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="/js/clean-blog.min.js"></script>
    </body>
</html>
