<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Language" content="en" />
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="theme-color" content="#4188c9">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
        <title>Homepage - tabler.github.io - a responsive, flat and full featured admin template</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">



        {!! Html::script('assets/js/vendors/jquery-3.2.1.min.js') !!}
        {!! Html::script('assets/js/require.min.js') !!}

        <script>
            requirejs.config({
                baseUrl: '{{ URL::to('/') }}'
            });
        </script>
        <!-- Dashboard Core -->
        {!! Html::style('assets/css/dashboard.css') !!}
        {!! Html::script('assets/js/dashboard.js') !!}

        <!-- c3.js Charts Plugin -->
        {!! Html::style('assets/plugins/charts-c3/plugin.css') !!}
        {!! Html::script('assets/plugins/charts-c3/plugin.js') !!}
        <!-- Google Maps Plugin -->
        {!! Html::style('assets/plugins/maps-google/plugin.css') !!}
        {!! Html::script('assets/plugins/maps-google/plugin.js') !!}
        <!-- Input Mask Plugin -->
        {!! Html::script('assets/plugins/input-mask/plugin.js') !!}

    </head>
    <body>
        <div class="page">
            <div class="page-main">
                <!-- Header -->
                        @include('layouts.system.header')
                <!-- /Header -->

                <!-- Header Menu -->
                        @include('layouts.system.headermenu')
                <!-- /Header Menu -->

                <!-- page content -->
                        @yield('content')
            </div>

                <!-- Footer area -->
                    @include('layouts.system.components.footer')
                <!-- /Footer area -->

        </div>
    </body>
</html>