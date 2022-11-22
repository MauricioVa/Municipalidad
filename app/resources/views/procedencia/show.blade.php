@extends('layouts.app')

@section('template_title')
    {{ $procedencia->name ?? 'Show Procedencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Procedencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('procedencias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombreprocedencia:</strong>
                            {{ $procedencia->NombreProcedencia }}
                        </div>
                        <div class="form-group">
                            <strong>Lote:</strong>
                            {{ $procedencia->Lote }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
