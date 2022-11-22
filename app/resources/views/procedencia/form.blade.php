<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NombreProcedencia') }}
            {{ Form::text('NombreProcedencia', $procedencia->NombreProcedencia, ['class' => 'form-control' . ($errors->has('NombreProcedencia') ? ' is-invalid' : ''), 'placeholder' => 'Nombreprocedencia']) }}
            {!! $errors->first('NombreProcedencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Lote') }}
            {{ Form::text('Lote', $procedencia->Lote, ['class' => 'form-control' . ($errors->has('Lote') ? ' is-invalid' : ''), 'placeholder' => 'Lote']) }}
            {!! $errors->first('Lote', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>