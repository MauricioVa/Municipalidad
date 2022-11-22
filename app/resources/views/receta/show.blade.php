@extends('layouts.app')

@section('template_title')
    {{ $receta->name ?? 'Show Receta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Receta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recetas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Farmaco Id:</strong>
                            {{ $receta->farmaco_id }}
                        </div>
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $receta->Rut }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaemicion:</strong>
                            {{ $receta->fechaemicion }}
                        </div>
                        <div class="form-group">
                            <strong>Comuna:</strong>
                            {{ $receta->Comuna }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreapoderado:</strong>
                            {{ $receta->NombreApoderado }}
                        </div>
                        <div class="form-group">
                            <strong>Rutapoderado:</strong>
                            {{ $receta->RutApoderado }}
                        </div>
                        <div class="form-group">
                            <strong>Rp Prescripcion:</strong>
                            {{ $receta->RP_prescripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Alternativacomercial:</strong>
                            {{ $receta->AlternativaComercial }}
                        </div>
                        <div class="form-group">
                            <strong>Viaadministracion:</strong>
                            {{ $receta->ViaAdministracion }}
                        </div>
                        <div class="form-group">
                            <strong>Frecuencia:</strong>
                            {{ $receta->Frecuencia }}
                        </div>
                        <div class="form-group">
                            <strong>Periodotratamiento:</strong>
                            {{ $receta->PeriodoTratamiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
