@extends('layouts.admin')

@section('content')


    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row row-cards row-deck">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Category</h3>
                        </div>

                        <div style="margin-top: 10px; margin-bottom: 10px" class="col-sm-1">
                            <button id="createBtn" type="button" class="btn btn-sm btn-outline-danger">Add <i class="fe fe-plus mr-2"></i></button>
                        </div>

                        {!! Form::open(['method' => 'POST', 'action'=>'System\CategoryController@store','id'=>'categoryform']) !!}
                              @include('admin.category._partials.form')
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


                                @foreach($Categories as $category)

                                    <tr>
                                        <td><span class="text-muted">{{ $category->id }}</span></td>
                                        <td>{{ $category->code }}</td>
                                        <td><a href="#" class="text-inherit">{{ $category->name }}</a></td>
                                        <td>
                                           {{ $category->description }}
                                        </td>
                                        <td>
                                          <img src="{{ $category->url }}" style="height: 100px;width: 50px">
                                        </td>
                                        <td>
                                            {{ $category->min_price }}
                                        </td>
                                        <td>
                                            {{ $category->level }}
                                        </td>
                                        <td>
                                            @if(empty($category->disabled))
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
                            {{ $Categories->links() }}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection

@section('js')
    <script>
        $( document ).ready(function() {
            $('#categoryform').hide();
            $('#createBtn').click(function () {
                $('#categoryform').toggle("slow",function () {});
            });

        });
    </script>
@endsection