<div class="card-body">


        <div class="row">
            <div class="form-group col-sm-4 col-md-4">
                {!! Form::label('name','Name', ['class'=>'form-label']) !!}
                {!! Form::text('name', null, ['class'=>'form-control','id'=>'nameField'])  !!}
            </div>

            <div class="form-group col-sm-4 col-md-8">
                {!! Form::label('desc','Description', ['class'=>'form-label']) !!}
                {!! Form::text('desc', null, ['class'=>'form-control','id'=>'descField'])  !!}
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