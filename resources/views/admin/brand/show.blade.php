@extends('layouts.admin')

@section('content')
    <?php $brand = \App\Models\Brand::findOrFail($id); ?>

    <div class="my-3 my-md-5">
        <div class="container">
            <div class="row row-cards row-deck">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><a href="{{ url('/admin/brand') }}"> Brand </a>  |  {{ $brand->name }} </h3>
                        </div>

                        {!! Form::model($brand, ['method' => 'PATCH', 'action'=> ['System\BrandController@update', $brand->id], 'class' => 'form-horizontal']) !!}
                        @include('admin.brand._partials.view')
                        {!! Form::close() !!}


                    </div>

                </div>
            </div>


        </div>
    </div>


@endsection