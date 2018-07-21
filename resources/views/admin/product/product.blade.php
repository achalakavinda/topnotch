@extends('layouts.admin')

@section('content')


    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row row-cards row-deck">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Products</h3>
                        </div>

                        <div style="margin-top: 10px; margin-bottom: 10px" class="col-sm-1">
                            <button id="createBtn" type="button" class="btn btn-sm btn-outline-danger"><i class="fe fe-plus mr-2"></i>Add</button>
                            <button id="minuseBtn" type="button" class="btn btn-sm btn-outline-danger"><i class="fe fe-minus mr-2"></i>Close</button>
                        </div>

                        {!! Form::open(['method' => 'POST', 'action'=>'System\ProductController@store','id'=>'crudForm']) !!}
                        @include('admin.product._partials.form')
                        {!! Form::close() !!}

                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap">
                                <thead>
                                <tr>
                                    <th class="w-1">No.</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Desc</th>
                                    <th>Image</th>
                                    <th>Min</th>
                                    <th>Level</th>
                                    <th>Disabled</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($Products as $product)

                                    <tr>
                                        <td><span class="text-muted">{{ $product->id }}</span></td>
                                        <td>{{ $category->code }}</td>
                                        <td><a href="#" class="text-inherit">{{ $product->name }}</a></td>


                                        <td>
                                            @if(empty($product->disabled))
                                                <span class="status-icon bg-success"></span> Enable
                                            @else
                                                <span class="status-icon bg-danger"></span> Disable
                                            @endif
                                        </td>

                                        <td class="text-right">
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                            </div>
                                        </td>

                                        <td>
                                            <a class="icon" href="javascript:void(0)">
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
                            .pagination-holder>.pagination{
                            }
                        </style>
                        <div class="pagination-holder">
                            {{ $Products->links() }}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection

@section('js')

@endsection