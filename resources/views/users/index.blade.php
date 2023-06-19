@extends('adminlte::page')
@section('title','Indice de Usuarios')
@section('content')
    <h1 class="text-center">BIENVENIDO A LA PAGINA PRINCIPAL DE USUARIOS</h1>
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">Crear Usuario</a>

    @if (count($users) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('usuarios.show', $user->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
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
