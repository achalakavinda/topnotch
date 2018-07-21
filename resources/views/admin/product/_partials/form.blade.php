<div class="card-body">


    <div class="row">
        <div class="form-group col-sm-4 col-md-3">
            {!! Form::label('name','Name', ['class'=>'form-label']) !!}
            {!! Form::text('name', null, ['class'=>'form-control'])  !!}
        </div>

        <div class="form-group col-sm-4 col-md-3">
            {!! Form::label('price','Price', ['class'=>'form-label']) !!}
            {!! Form::text('price', null, ['class'=>'form-control'])  !!}
        </div>

        <div class="form-group col-sm-4 col-md-6">
            {!! Form::label('desc','Description', ['class'=>'form-label']) !!}
            {!! Form::text('desc', null, ['class'=>'form-control'])  !!}
        </div>

        <div class="form-group col-sm-4 col-md-3">
            {!! Form::label('category','Category', ['class'=>'form-label']) !!}
            <?php $categories = \App\Models\Category::where('disabled',0)->pluck('name','id')?>
            {!! Form::select('category_id', $categories, null, ['class'=>'custom-select','placeholder' => '']) !!}
        </div>

        <div class="form-group col-sm-4 col-md-3">
            {!! Form::label('brand','brand', ['class'=>'form-label']) !!}
            <?php $brands = \App\Models\Brand::where('disabled',0)->pluck('name','id')?>
            {!! Form::select('brand_id', $brands, null, ['class'=>'custom-select','placeholder' => '']) !!}
        </div>

    </div>

</div>
<div class="card-footer text-right">
    <button type="submit" class="btn btn-primary">Save</button>
</div>

@section('crud-js')

    <script>
        $( document ).ready(function() {
            $('#minuseBtn').hide();
            $('#crudForm').hide();

            $('#createBtn').click(function () {
                $('#crudForm').toggle("slow",function () {
                    $('#createBtn').hide();
                    $('#minuseBtn').show();
                    $('#minuseBtn').click(function () {
                        $('#crudForm').hide('slow');
                        $('#createBtn').show();
                        $('#minuseBtn').hide();
                    });
                });
            });

        });
    </script>

@endsection