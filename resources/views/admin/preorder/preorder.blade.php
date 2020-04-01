@extends('layouts.admin')

@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row row-cards row-deck">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pre Orders</h3>
                        </div>

                        <div class="table-responsive">
                            @include('generator.table')
                        </div>

                    </div>
                    <div class="card">
                        <style>
                            .pagination-holder{
                                width: 100%;
                                padding-top: 20px;
                                padding-bottom: 5px;
                                padding-left: 10px;
                                text-align: center;
                            }
                        </style>
                        <div class="pagination-holder">
                            {{--{{ $Brands->links() }}--}}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection