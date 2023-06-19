@extends('adminlte::page')
@section('title','Cronograma')
@section('content')
    <h1 class="text-center">BIENVENIDO A LA PAGINA PRINCIPAL DE LOS CRONOGRAMAS</h1>

    <a href="{{route('cronogramasEgresados.create')}}" class="btn btn-primary mb-3">Nuevo Cronograma</a>

    @if (count($cronogramas) > 0)
    <table class="table">
            <thead>
                <tr>
                    <th>Numero Cronograma</th>
                    <th>Actividad Cronograma</th>
                    <th>Fecha Cronograma</th>
                    <th>Periodo Cronograma</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cronogramas as $cronograma)
                    <tr>
                        <td>{{ $cronograma->numero_cronograma }}</td>
                        <td>{{ $cronograma->actividad_cronograma }}</td>
                        <td>{{ $cronograma->fecha_cronograma }}</td>
                        <td>{{ $cronograma->periodo_cronograma  }}</td>
                        <td>
                            <a href="{{ route('cronogramasEgresados.show', $cronograma->id) }}" class="btn btn-info m-1">Ver</a>
                            <a href="{{ route('cronogramasEgresados.edit', $cronograma->id) }}" class="btn btn-primary m-1">Editar</a>
                            <form action="{{ route('cronogramasEgresados.destroy', $cronograma->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('¿Estás seguro de que deseas eliminar este cronograma?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay egresados registrados.</p>
    @endif
    
    {{$cronogramas->links()}}

@endsection