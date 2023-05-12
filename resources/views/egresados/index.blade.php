@extends('layouts.plantillaIndexEgresado')
@section('title','Egresados')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('egresados.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($egresados as $egresado)
            <li>
               <a href="{{route('egresados.show', $egresado->egresado_id)}}">{{$egresado->egresado_id}}</a>
            </li>
        @endforeach 
    </ul>

    {{$egresados->links()}}

@endsection