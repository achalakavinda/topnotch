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
    {{ Html::style('css/core-style.css') }}
    {{ Html::style('style.css') }}

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
{{ Html::script('js/jquery/jquery-2.2.4.min.js') }}
<!-- Popper js -->
{{ Html::script('js/popper.min.js') }}
<!-- Bootstrap js -->
{{ Html::script('js/bootstrap.min.js') }}
<!-- Plugins js -->
{{ Html::script('js/plugins.js') }}
<!-- Active js -->
{{ Html::script('js/active.js') }}

</body>

</html>