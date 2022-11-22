<div class="box box-info padding-1">
    <div class="box-body">
        

        <div class="form-group">
            {{ Form::label('procedencia_id') }}
            {{ Form::select('procedencia_id', $procedencias , $farmacia->procedencia_id, ['class' => 'form-control' . ($errors->has('procedencia_id') ? ' is-invalid' : ''), 'placeholder' => 'Procedencia Id']) }}
            {!! $errors->first('procedencia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreFarmacia') }}
            {{ Form::text('NombreFarmacia', $farmacia->NombreFarmacia, ['class' => 'form-control' . ($errors->has('NombreFarmacia') ? ' is-invalid' : ''), 'placeholder' => 'Nombrefarmacia']) }}
            {!! $errors->first('NombreFarmacia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DireccionFarmacia') }}
            {{ Form::text('DireccionFarmacia', $farmacia->DireccionFarmacia, ['class' => 'form-control' . ($errors->has('DireccionFarmacia') ? ' is-invalid' : ''), 'placeholder' => 'Direccionfarmacia']) }}
            {!! $errors->first('DireccionFarmacia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable') }}
            {{ Form::text('Responsable', $farmacia->Responsable, ['class' => 'form-control' . ($errors->has('Responsable') ? ' is-invalid' : ''), 'placeholder' => 'Responsable']) }}
            {!! $errors->first('Responsable', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>