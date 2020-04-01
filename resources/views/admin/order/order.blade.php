@extends('layouts.admin')

@section('content')

    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row row-cards row-deck">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Oder</h3>
                        </div>


                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap">
                                <thead>
                                <tr>
                                    <th class="w-1">No.</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Purchased</th>
                                    <th>Verified</th>
                                    <th>Delivered</th>
                                    <th>Notes</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $Oders = \App\Models\Order::all();?>


                                @foreach($Oders as $order)

                                    <tr>
                                        <td><span class="text-muted">{{ $order->id }}</span></td>
                                        <td><a href="#" class="text-inherit">{{ $order->name }}</a></td>
                                        <td>
                                            {{ $order->address}}
                                        </td>
                                        <td>
                                            {{ $order->contact}}
                                        </td>
                                        <td>
                                            {{ $order->purchased}}
                                        </td>
                                        <td>
                                            {{ $order->veridied}}
                                        </td>
                                       <td>
                                           {{ $order->deliverd}}
                                       </td>
                                        <td>
                                            {{ $order->notes}}
                                        </td>

                                        <td class="text-right">
                                            <a class="icon" href="{{ url('admin/order') }}/{{ $order->id }}">
                                                <i class="fe fe-edit"></i>
                                            </a>

                                        </td>

                                    </tr>

                                @endforeach



                                </tbody>
                            </table>
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
                            {{--{{ $Tags->links() }}--}}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection