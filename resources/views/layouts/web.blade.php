<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>{!! env("APP_NAME") !!} - Cosmetic Shop</title>

    <!-- Favicon  -->
    <link rel="icon" href="{!! url('img/core-img/favicon.ico') !!}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{!! url('css/core-style.css') !!}">
    <link rel="stylesheet" href="{!! url('style.css') !!}">

</head>

<body>
<!-- Search Wrapper Area Start -->
    @include('layouts.web.components.searchwrapper')
<!-- Search Wrapper Area End -->

<!-- ##### Main Content Wrapper Start ##### -->

    @yield('content')

<!-- ##### Main Content Wrapper End ##### -->

<!-- ##### Newsletter Area Start ##### -->

    @include('layouts.web.components.newsletter')

<!-- ##### Newsletter Area End ##### -->


<!-- ##### Footer Area Start ##### -->
    @include('layouts.web.components.footer')
<!-- ##### Footer Area End ##### -->


<!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
<script src="{!! url('js/jquery/jquery-2.2.4.min.js') !!}"></script>
<!-- Popper js -->
<script src="{!! url('js/popper.min.js') !!}"></script>
<!-- Bootstrap js -->
<script src="{!! url('js/bootstrap.min.js') !!}"></script>
<!-- Plugins js -->
<script src="{!! url('js/plugins.js') !!}"></script>
<!-- Active js -->
<script src="{!! url('js/active.js') !!}"></script>

</body>

</html>