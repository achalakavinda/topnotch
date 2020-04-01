@extends('layouts.admin')

@section('content')


    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row row-cards row-deck">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tag</h3>
                        </div>

                        <div style="margin-top: 10px; margin-bottom: 10px" class="col-sm-1">
                            <button id="createBtn" type="button" class="btn btn-sm btn-outline-danger"><i class="fe fe-plus mr-2"></i>Add</button>
                            <button id="minuseBtn" type="button" class="btn btn-sm btn-danger"><i class="fe fe-minus mr-2"></i>Close</button>
                        </div>

                        {!! Form::open(['method' => 'POST', 'action'=>'System\TagController@store','id'=>'crudForm']) !!}
                        @include('admin.tag._partials.form')
                        {!! Form::close() !!}

                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap">
                                <thead>
                                <tr>
                                    <th class="w-1">No.</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Desc</th>
                                    <th>Disabled</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($Tags as $tag)

                                    <tr>
                                        <td><span class="text-muted">{{ $tag->id }}</span></td>
                                        <td>
                                            {{ $tag->code }}
                                        </td>
                                        <td><a href="#" class="text-inherit">{{ $tag->name }}</a></td>
                                        <td>
                                            {{ $tag->desc}}
                                        </td>
                                        <td>
                                            @if(!$tag->disable)
                                                <span class="status-icon bg-success"></span> Enable
                                            @else
                                                <span class="status-icon bg-danger"></span> Disable
                                            @endif
                                        </td>

                                        <td class="text-right">
                                            <a class="icon" href="{{ url('admin/tag') }}/{{ $tag->id }}">
                                                <i class="fe fe-edit"></i>
                                            </a>

                                        </td>

                                        <td>
                                            @if(!$tag->disable)
                                                <a href="" class="icon"> <i class="fe fe-delete"></i></a>
                                            @endif
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