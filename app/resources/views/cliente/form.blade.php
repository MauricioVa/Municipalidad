<div class="box box-info padding-1">
    <div class="box-body">
        


        <div class="form-group">
            {{ Form::label('receta_id') }}
            {{ Form::select('receta_id', $recetas,  $cliente->receta_id, ['class' => 'form-control' . ($errors->has('receta_id') ? ' is-invalid' : ''), 'placeholder' => 'Receta Id']) }}
            {!! $errors->first('receta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $cliente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Rut') }}
            {{ Form::text('Rut', $cliente->Rut, ['class' => 'form-control' . ($errors->has('Rut') ? ' is-invalid' : ''), 'placeholder' => 'Rut']) }}
            {!! $errors->first('Rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaNacimiento') }}
            {{ Form::text('FechaNacimiento', $cliente->FechaNacimiento, ['class' => 'form-control' . ($errors->has('FechaNacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechanacimiento']) }}
            {!! $errors->first('FechaNacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fono') }}
            {{ Form::text('Fono', $cliente->Fono, ['class' => 'form-control' . ($errors->has('Fono') ? ' is-invalid' : ''), 'placeholder' => 'Fono']) }}
            {!! $errors->first('Fono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $cliente->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $cliente->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>