<header class="header-area clearfix">
    <!-- Close Icon -->
    <div class="nav-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <!-- Logo -->
    <div class="logo">
        <a href="index.html"><img src="{{ url('img/core-img/logo.png') }}" alt=""></a>
    </div>

    <!-- Nav -->
         @include('layouts.web.components.elements.navigator')
    <!-- Nav -->

    <!-- Button Group -->
        @include('layouts.web.components.elements.ButtonGroup')
    <!-- Button Group -->


    <!-- Cart Menu -->
        @include('layouts.web.components.elements.cartmenu')
    <!-- Cart Menu -->


    <!-- Social Button -->
        @include('layouts.web.components.elements.socialbutton')
    <!-- Social Button -->

</header>