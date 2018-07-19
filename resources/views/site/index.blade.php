@extends('layouts.web')

@section('content')

    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                {{--<a href="index.html"><img src="img/core-img/logo.png" alt=""></a>--}}
                <a href="index.html">Top Notch</a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
            @include('layouts.web.components.headerarea')
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->
            @include('layouts.web.components.productcategoriesarea')
        <!-- Product Catagories Area End -->
    </div>


@endsection