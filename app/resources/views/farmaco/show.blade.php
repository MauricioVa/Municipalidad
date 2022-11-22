@extends('layouts.app')

@section('template_title')
    {{ $farmaco->name ?? 'Show Farmaco' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Farmaco</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('farmacos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Farmacia Id:</strong>
                            {{ $farmaco->farmacia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrefarmaco:</strong>
                            {{ $farmaco->NombreFarmaco }}
                        </div>
                        <div class="form-group">
                            <strong>Dosis:</strong>
                            {{ $farmaco->Dosis }}
                        </div>
                        <div class="form-group">
                            <strong>Laboratorio:</strong>
                            {{ $farmaco->Laboratorio }}
                        </div>
                        <div class="form-group">
                            <strong>Procedencianombre:</strong>
                            {{ $farmaco->ProcedenciaNombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $farmaco->Cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Fechavencimiento:</strong>
                            {{ $farmaco->FechaVencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $farmaco->imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
