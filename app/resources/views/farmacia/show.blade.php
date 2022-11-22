@extends('layouts.app')

@section('template_title')
    {{ $farmacia->name ?? 'Show Farmacia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Farmacia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('farmacias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Procedencia Id:</strong>
                            {{ $farmacia->procedencia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrefarmacia:</strong>
                            {{ $farmacia->NombreFarmacia }}
                        </div>
                        <div class="form-group">
                            <strong>Direccionfarmacia:</strong>
                            {{ $farmacia->DireccionFarmacia }}
                        </div>
                        <div class="form-group">
                            <strong>Responsable:</strong>
                            {{ $farmacia->Responsable }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
