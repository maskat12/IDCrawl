<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Global stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="limitless/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
        <link href="limitless/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="limitless/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
        <link href="limitless/css/layout.min.css" rel="stylesheet" type="text/css">
        <link href="limitless/css/components.min.css" rel="stylesheet" type="text/css">
        <link href="limitless/css/colors.min.css" rel="stylesheet" type="text/css">
        <link href="limitless/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
        <link href="slick/slick.css" rel="stylesheet" type="text/css">
        <link href="slick/slick-theme.css" rel="stylesheet" type="text/css">
        <!-- /global stylesheets -->

        <!-- Core JS files -->
        <script src="limitless/js/main/jquery.min.js"></script>
        <script src="limitless/js/main/bootstrap.bundle.min.js"></script>
        <script src="limitless/js/plugins/loaders/blockui.min.js"></script>
        <script src="limitless/js/plugins/ui/slinky.min.js"></script>
        <script src="slick/slick.min.js"></script>
        <!-- /core JS files -->
        

        <!-- Theme JS files -->
        <script src="limitless/js/plugins/visualization/d3/d3.min.js"></script>
        <script src="limitless/js/plugins/visualization/d3/d3_tooltip.js"></script>
        <script src="limitless/js/plugins/forms/styling/switchery.min.js"></script>
        <script src="limitless/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
        <script src="limitless/js/plugins/ui/moment/moment.min.js"></script>
        <script src="limitless/js/plugins/pickers/daterangepicker.js"></script>

        <!-- <script src="js/app.js"></script> -->
        <script src="limitless/js/demo_pages/dashboard.js"></script>
        <!-- /theme JS files -->

        <link href="{{ asset('css/index.css') }}" rel="stylesheet">

        <title> ID Crawl &mdash; @yield('title')</title>
        <meta name="description" content="Indonesia Crawlers">

        @php
            $auth = Auth::user();
        @endphp
    </head>
    <body>

        @include('layouts.modules.header')
        <div class="page-content">
            <div class="content-wrapper">
                

                @yield('content')
            </div>
        </div>
        @include('layouts.modules.footer')
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};

            @if(Auth::check())
            var _users = {!! json_encode(Auth::user()) !!}
            @endif
        </script>
        
    </body>
</html>