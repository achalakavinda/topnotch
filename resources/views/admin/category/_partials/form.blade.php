<div class="card-body">


        <div class="row">
            <div class="form-group col-sm-4 col-md-2">
                {!! Form::label('code','Code', ['class'=>'form-label']) !!}
                {!! Form::text('code', null, ['class'=>'form-control'])  !!}
            </div>

            <div class="form-group col-sm-4 col-md-4">
                {!! Form::label('name','Name', ['class'=>'form-label']) !!}
                {!! Form::text('name', null, ['class'=>'form-control'])  !!}
            </div>

            <div class="form-group col-sm-4 col-md-6">
                {!! Form::label('desc','Description', ['class'=>'form-label']) !!}
                {!! Form::text('desc', null, ['class'=>'form-control'])  !!}
            </div>
        </div>


        <div class="form-label">Feature Image</div>
        <div class="table-responsive">
            <table class="table mb-0">

                <tr>
                    <td class="pl-0">
                        <select class="custom-select">
                            <option value="0" selected>Use Image Url</option>
                            <option value="1">Upload Image</option>
                        </select>
                    </td>

                    <td>
                        {!! Form::text('url', null, ['class'=>'form-control'])  !!}
                    </td>
                    <td class="pr-0">
                        <label class="custom-switch">
                            <input type="checkbox" name="disable" class="custom-switch-input">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">Publish</span>
                        </label>
                    </td>
                </tr>

            </table>
        </div>
    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>