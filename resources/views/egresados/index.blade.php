@extends('adminlte::page')
@section('title','Egresados')
@section('content')
    <h1 class="text-center">BIENVENIDO A LA PAGINA PRINCIPAL DE EGRESADOS</h1>

    <a href="{{route('egresados.create')}} " class="btn btn-primary mb-3">Nuevo Egresado</a>

    @if (count($egresados) > 0)
    <table class="table">
            <thead>
                <tr>
                    <th>Nombre Completo</th>
                    <th>Grado de Instruccion</th>
                    <th>Fecha Egreso</th>
                    <th>Empresa</th>
                    <th>Cargo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($egresados as $egresado)
                    <tr>
                        <td>{{ $egresado->nombre_egresado }}</td>
                        <td>{{ $egresado->grado_instruccion_egresado }}</td>
                        <td>{{ $egresado->fecha_egreso_egresado }}</td>
                        <td>{{ $egresado->empresa_id  }}</td>
                        <td>{{ $egresado->cargo_empresa_egresado }}</td>
                        <td>
                            <a href="{{ route('egresados.show', $egresado->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('egresados.edit', $egresado->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('egresados.destroy', $egresado->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este egresado?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay egresados registrados.</p>
    @endif


    {{$egresados->links()}}

@endsection