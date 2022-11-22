<div class="box box-info padding-1">
    <div class="box-body">
        

        <div class="form-group">
            {{ Form::label('farmaco_id') }}
            {{ Form::select('farmaco_id',$farmacos, $receta->farmaco_id, ['class' => 'form-control' . ($errors->has('farmaco_id') ? ' is-invalid' : ''), 'placeholder' => 'Farmaco Id']) }}
            {!! $errors->first('farmaco_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Rut') }}
            {{ Form::text('Rut', $receta->Rut, ['class' => 'form-control' . ($errors->has('Rut') ? ' is-invalid' : ''), 'placeholder' => 'Rut']) }}
            {!! $errors->first('Rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaemicion') }}
            {{ Form::text('fechaemicion', $receta->fechaemicion, ['class' => 'form-control' . ($errors->has('fechaemicion') ? ' is-invalid' : ''), 'placeholder' => 'Fechaemicion']) }}
            {!! $errors->first('fechaemicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Comuna') }}
            {{ Form::text('Comuna', $receta->Comuna, ['class' => 'form-control' . ($errors->has('Comuna') ? ' is-invalid' : ''), 'placeholder' => 'Comuna']) }}
            {!! $errors->first('Comuna', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreApoderado') }}
            {{ Form::text('NombreApoderado', $receta->NombreApoderado, ['class' => 'form-control' . ($errors->has('NombreApoderado') ? ' is-invalid' : ''), 'placeholder' => 'Nombreapoderado']) }}
            {!! $errors->first('NombreApoderado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RutApoderado') }}
            {{ Form::text('RutApoderado', $receta->RutApoderado, ['class' => 'form-control' . ($errors->has('RutApoderado') ? ' is-invalid' : ''), 'placeholder' => 'Rutapoderado']) }}
            {!! $errors->first('RutApoderado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RP_prescripcion') }}
            {{ Form::text('RP_prescripcion', $receta->RP_prescripcion, ['class' => 'form-control' . ($errors->has('RP_prescripcion') ? ' is-invalid' : ''), 'placeholder' => 'Rp Prescripcion']) }}
            {!! $errors->first('RP_prescripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('AlternativaComercial') }}
            {{ Form::text('AlternativaComercial', $receta->AlternativaComercial, ['class' => 'form-control' . ($errors->has('AlternativaComercial') ? ' is-invalid' : ''), 'placeholder' => 'Alternativacomercial']) }}
            {!! $errors->first('AlternativaComercial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ViaAdministracion') }}
            {{ Form::text('ViaAdministracion', $receta->ViaAdministracion, ['class' => 'form-control' . ($errors->has('ViaAdministracion') ? ' is-invalid' : ''), 'placeholder' => 'Viaadministracion']) }}
            {!! $errors->first('ViaAdministracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Frecuencia') }}
            {{ Form::text('Frecuencia', $receta->Frecuencia, ['class' => 'form-control' . ($errors->has('Frecuencia') ? ' is-invalid' : ''), 'placeholder' => 'Frecuencia']) }}
            {!! $errors->first('Frecuencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PeriodoTratamiento') }}
            {{ Form::text('PeriodoTratamiento', $receta->PeriodoTratamiento, ['class' => 'form-control' . ($errors->has('PeriodoTratamiento') ? ' is-invalid' : ''), 'placeholder' => 'Periodotratamiento']) }}
            {!! $errors->first('PeriodoTratamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>