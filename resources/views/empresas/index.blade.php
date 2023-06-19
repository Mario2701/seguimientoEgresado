@extends('adminlte::page')
@section('title','Empresas')
@section('content')
    <h1 class="text-center">BIENVENIDO A LA PAGINA PRINCIPAL DE EMPRESAS</h1>

    <a href="{{route('empresas.create')}}" class="btn btn-primary mb-3">Nuevo Empresa</a>

    @if (count($empresas) > 0)
    <table class="table">
            <thead>
                <tr>
                    <th>Nombre Empresa</th>
                    <th>Representante</th>
                    <th>Celular</th>
                    <th>Direccion</th>
                    <th>Rubro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empresas as $empresa)
                    <tr>
                        <td>{{ $empresa->nombre_empresa }}</td>
                        <td>{{ $empresa->representante_empresa }}</td>
                        <td>{{ $empresa->celular_empresa }}</td>
                        <td>{{ $empresa->direccion_empresa  }}</td>
                        <td>{{ $empresa->rubro_empresa }}</td>
                        <td>
                            <a href="{{ route('empresas.show', $empresa->id) }}" class="btn btn-info ml-1 mr-1 mb-1">Ver</a>
                            <a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-primary ml-1 mr-1 mb-1">Editar</a>
                            <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('¿Estás seguro de que deseas eliminar esta empresa?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay egresados registrados.</p>
    @endif

    {{$empresas->links()}}

@endsection