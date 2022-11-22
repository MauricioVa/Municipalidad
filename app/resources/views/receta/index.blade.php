@extends('layouts.app')

@section('template_title')
    Receta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Receta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('recetas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Farmaco Id</th>
										<th>Rut</th>
										<th>Fechaemicion</th>
										<th>Comuna</th>
										<th>Nombreapoderado</th>
										<th>Rutapoderado</th>
										<th>Rp Prescripcion</th>
										<th>Alternativacomercial</th>
										<th>Viaadministracion</th>
										<th>Frecuencia</th>
										<th>Periodotratamiento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recetas as $receta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $receta->farmaco_id }}</td>
											<td>{{ $receta->Rut }}</td>
											<td>{{ $receta->fechaemicion }}</td>
											<td>{{ $receta->Comuna }}</td>
											<td>{{ $receta->NombreApoderado }}</td>
											<td>{{ $receta->RutApoderado }}</td>
											<td>{{ $receta->RP_prescripcion }}</td>
											<td>{{ $receta->AlternativaComercial }}</td>
											<td>{{ $receta->ViaAdministracion }}</td>
											<td>{{ $receta->Frecuencia }}</td>
											<td>{{ $receta->PeriodoTratamiento }}</td>

                                            <td>
                                                <form action="{{ route('recetas.destroy',$receta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('recetas.show',$receta->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('recetas.edit',$receta->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $recetas->links() !!}
            </div>
        </div>
    </div>
@endsection
