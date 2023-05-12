@extends('layouts.plantillaIndexEvaluacionEgresado')
@section('title','Egresados')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('evaluacionEgresados.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($evaluaciones as $evaluacion)
            <li>
               <a href="{{route('evaluacionEgresados.show', $evaluacion->evaluacion_egresado_id)}}">{{$evaluacion->evaluacion_egresado_id}}</a>
            </li>
        @endforeach 
    </ul>

    {{$evaluaciones->links()}}

@endsection