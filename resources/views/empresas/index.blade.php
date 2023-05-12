@extends('layouts.plantillaIndexEmpresa')
@section('title','Egresados')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('empresas.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($empresas as $empresa)
            <li>
               <a href="{{route('empresas.show', $empresa->empresa_id)}}">{{$empresa->empresa_id}}</a>
            </li>
        @endforeach 
    </ul>

    {{$empresas->links()}}

@endsection