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
                        <a href="{{ url("/") }}" class="nav-link active"><i class="fe fe-home"></i> Site</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i> Category</a>
                        <div class="dropdown-menu dropdown-menu-arrow">
                            <a href="{{ url('/admin/category') }}" class="dropdown-item ">Categories</a>
                            <a href="{{ url('/admin/category/create') }}" class="dropdown-item ">Create</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i> Product</a>
                        <div class="dropdown-menu dropdown-menu-arrow">
                            <a href="{{ url('/admin/product') }}" class="dropdown-item ">Products</a>
                            <a href="{{ url('/admin/product/create') }}" class="dropdown-item ">Create</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url("/admin/order") }}" class="nav-link"><i class="fe fe-home"></i> Order</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url("/admin/pre-order") }}" class="nav-link"><i class="fe fe-home"></i> Pre-Oder</a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>
