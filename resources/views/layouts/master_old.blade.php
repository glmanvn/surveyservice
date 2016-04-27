<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo Lang::get('title_master.page_description'); ?>">
        <meta name="author" content="anld">
        <meta name="keyword" content="survey, khao sat">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>@yield('header.title')</title>

        <!-- Bootstrap CSS -->    
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="/css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="/css/elegant-icons-style.css" rel="stylesheet" />
        <link href="/css/font-awesome.min.css" rel="stylesheet" />
        <!-- Custom styles -->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/style-responsive.css" rel="stylesheet" />
        <link href="/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
        
        @yield('header.css')

        <link href="/css/app.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
        <!--[if lt IE 9]>
          <script src="/js/html5shiv.js"></script>
          <script src="/js/respond.min.js"></script>
          <script src="/js/lte-ie7.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- container section start -->
        <section id="container" class="">
            <!--header start-->
            @include('partials.backend_header')
            <!--header end-->

            <!--sidebar start-->
            @include('partials.backend_sidebar')
            <!--sidebar end-->

            <!--main content start-->
            @yield('body.content')
            <!--main content end-->
        </section>
        <!-- container section end -->
        
        <!--footer start-->
        @include('partials.backend_footer')
        <!--footer end-->
        
        <!-- javascripts -->
        <script src="/js/jquery.js"></script>
        <script src="/js/jquery-ui-1.10.4.min.js"></script>
        <script src="/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="/js/jquery-ui-1.9.2.custom.min.js"></script>
        
        <script src="/js/bootstrap.min.js"></script>
        <!-- nice scroll -->
        <script src="/js/jquery.scrollTo.min.js"></script>
        <script src="/js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
        <script src="/js/scripts.js"></script>

        @yield('body.js')

    </body>
</html>