@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Receta Id:</strong>
                            {{ $cliente->receta_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $cliente->Rut }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $cliente->FechaNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Fono:</strong>
                            {{ $cliente->Fono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $cliente->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $cliente->imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
