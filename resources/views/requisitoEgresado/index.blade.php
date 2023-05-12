@extends('layouts.plantillaIndexRequisitoEgresado')
@section('title','Requisito de egresado')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('requisitoEgresado.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($requisitos as $requisito)
            <li>
               <a href="{{route('requisitoEgresado.show', $requisito->requisito_egresados_id)}}">{{$requisito->certificado_egresado}}</a>
            </li>
        @endforeach 
    </ul>

    {{$requisitos->links()}}

@endsection