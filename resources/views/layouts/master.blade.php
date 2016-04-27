<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('header.title')</title>

        <!-- Bootstrap core CSS -->

        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <link href="/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/maps/jquery-jvectormap-2.0.3.css" />
        <link href="/css/icheck/flat/green.css" rel="stylesheet" />
        <link href="/css/floatexamples.css" rel="stylesheet" type="text/css" />

        <script src="/js/jquery.min.js"></script>
        <script src="/js/nprogress.js"></script>

        <!--[if lt IE 9]>
              <script src="../assets/js/ie8-responsive-file-warning.js"></script>
              <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
              <![endif]-->
        
        <link href="/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/animate.min.css" rel="stylesheet">
        <!-- Custom styling plus plugins -->
        <link href="/css/custom.css" rel="stylesheet">
        <link href="/css/icheck/flat/green.css" rel="stylesheet">

        @yield('header.css')
        
        <link href="/css/custom.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="nav-md">
        <div class="container body">

            <div class="main_container">
                <!--leftmenu start-->
                @include('partials.backend_leftmenu')
                <!--leftmenu end-->

                <!-- header start-->
                @include('partials.backend_header')
                <!-- header end-->

                <!--main content start-->
                @yield('body.content')
                <!--main content end-->
            </div>
        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="/js/bootstrap.min.js"></script>

        <!-- bootstrap progress js -->
        <script src="/js/progressbar/bootstrap-progressbar.min.js"></script>
        <!-- icheck -->
        <script src="/js/icheck/icheck.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="/js/moment/moment.min.js"></script>
        <script type="text/javascript" src="/js/datepicker/daterangepicker.js"></script>
        <!-- chart js -->
        <script src="/js/chartjs/chart.min.js"></script>

        @yield('body.js')
        
        <script src="/js/custom.js"></script>

        <!-- /footer content -->
    </body>
</html>
