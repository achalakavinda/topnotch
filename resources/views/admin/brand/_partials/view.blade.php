<div class="card-body">


    <div class="row">
        <div class="form-group col-sm-4 col-md-4">
            {!! Form::label('name','Name', ['class'=>'form-label']) !!}
            {!! Form::text('name', null, ['class'=>'form-control','id'=>'nameField'])  !!}
        </div>

        <div class="form-group col-sm-4 col-md-8">
            {!! Form::label('desc','Description', ['class'=>'form-label']) !!}
            {!! Form::text('description', null, ['class'=>'form-control','id'=>'descField'])  !!}
        </div>

        <div class="form-group col-sm-4 col-md-2">
            <label class="custom-switch">
                <input type="checkbox" name="disabled" @if($brand->disabled) <?php echo "checked"; ?> @endif class="custom-switch-input">
                <span class="custom-switch-indicator"></span>
                <span class="custom-switch-description">Disable</span>
            </label>
        </div>

    </div>
</div>
<div class="card-footer text-right">
    <button id="update" type="button" class="btn btn-danger">Update</button>
    <button id="submit" type="submit" class="btn btn-primary">Save</button>
</div>

@section('crud-js')

    <script type="text/javascript">

        $( document ).ready(function() {
            $('#submit').hide();

            $('#update').click(function () {
                $('#update').hide();
               $('#submit').show();
            });

        });

    </script>

@endsection