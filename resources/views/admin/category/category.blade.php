@extends('layouts.admin')

@section('content')


    <div class="my-3 my-md-5">
        <div class="container">

            <div class="page-header">
                <h1 class="page-title">
                    Category
                </h1>
            </div>


            <div class="row row-cards row-deck">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Category</h3>
                        </div>
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
                                          <img src="{{ $category->url }}" style="height: 50px;width: 20px">
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
                </div>
            </div>


        </div>
    </div>


@endsection