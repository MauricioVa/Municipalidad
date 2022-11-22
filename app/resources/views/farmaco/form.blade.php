<div class="box box-info padding-1">
    <div class="box-body">
        

        <div class="form-group">
            {{ Form::label('farmacia_id') }}
            {{ Form::select('farmacia_id',$farmacias, $farmaco->farmacia_id, ['class' => 'form-control' . ($errors->has('farmacia_id') ? ' is-invalid' : ''), 'placeholder' => 'Farmacia Id']) }}
            {!! $errors->first('farmacia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreFarmaco') }}
            {{ Form::text('NombreFarmaco', $farmaco->NombreFarmaco, ['class' => 'form-control' . ($errors->has('NombreFarmaco') ? ' is-invalid' : ''), 'placeholder' => 'Nombrefarmaco']) }}
            {!! $errors->first('NombreFarmaco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dosis') }}
            {{ Form::text('Dosis', $farmaco->Dosis, ['class' => 'form-control' . ($errors->has('Dosis') ? ' is-invalid' : ''), 'placeholder' => 'Dosis']) }}
            {!! $errors->first('Dosis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Laboratorio') }}
            {{ Form::text('Laboratorio', $farmaco->Laboratorio, ['class' => 'form-control' . ($errors->has('Laboratorio') ? ' is-invalid' : ''), 'placeholder' => 'Laboratorio']) }}
            {!! $errors->first('Laboratorio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ProcedenciaNombre') }}
            {{ Form::text('ProcedenciaNombre', $farmaco->ProcedenciaNombre, ['class' => 'form-control' . ($errors->has('ProcedenciaNombre') ? ' is-invalid' : ''), 'placeholder' => 'Procedencianombre']) }}
            {!! $errors->first('ProcedenciaNombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('Cantidad', $farmaco->Cantidad, ['class' => 'form-control' . ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaVencimiento') }}
            {{ Form::text('FechaVencimiento', $farmaco->FechaVencimiento, ['class' => 'form-control' . ($errors->has('FechaVencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechavencimiento']) }}
            {!! $errors->first('FechaVencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $farmaco->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>