@extends('adminlte::page')
@section('title','Home')
@section('content')
    <h1 class="text-center">BIENVENIDO A LA PAGINA PRINCIPAL DE ACTAS</h1>

    <a href="{{route('actasEgresados.create')}}" class="btn btn-primary mb-3">Crear Acta</a>

    @if (count($actas) > 0)
    <table class="table">
            <thead>
                <tr>
                    <th>Reunion id</th>
                    <th>Junta directiva id</th>
                    <th>Egresado id</th>
                    <th>Resultado Acta</th>
                    <th>Firma Responsable</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($actas as $acta)
                    <tr>
                        <td>{{ $acta->reunion_id }}</td>
                        <td>{{ $acta->junta_directiva_egresado_id }}</td>
                        <td>{{ $acta->egresado_id }}</td>
                        <td>{{ $acta->resultado_acta_egresado }}</td>
                        <td>{{ $acta->firma_responsable_acta_egresado }}</td>
                        <td>
                            <a href="{{ route('actasEgresados.show', $acta->id) }}" class="btn btn-info m-1">Ver</a>
                            <a href="{{ route('actasEgresados.edit', $acta->id) }}" class="btn btn-primary m-1">Editar</a>
                            <form action="{{ route('actasEgresados.destroy', $acta->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger  ml-4" onclick="return confirm('¿Estás seguro de que deseas eliminar esta acta?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay usuarios registrados.</p>
    @endif
@endsection
