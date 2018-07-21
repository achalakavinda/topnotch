<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-3 ml-auto">
                <!-- header search -->
                    @include('layouts.system.components.headersearch')
                <!-- /header search -->
            </div>

            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <li class="nav-item">
                        <a href="{{ url("/") }}" class="nav-link"><i class="fe fe-home"></i> Site</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/admin/category') }}" class="nav-link"><i class="fe fe-box"></i> Category</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/admin/brand') }}" class="nav-link"><i class="fe fe-watch"></i> Brand</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/admin/tag') }}" class="nav-link"><i class="fe fe-tag"></i> Tag</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/admin/product') }}" class="nav-link"><i class="fe fe-shopping-bag"></i> Product</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url("/admin/order") }}" class="nav-link"><i class="fe fe-truck"></i> Order</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url("/admin/pre-order") }}" class="nav-link"><i class="fe fe-send"></i> Pre-Oder</a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>
