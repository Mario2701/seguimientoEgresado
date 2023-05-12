@extends('layouts.plantillaIndexFormatoEvaluacion')
@section('title','Trabajo')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('formatoEvaluacion.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($formatos as $formato)
            <li>
               <a href="{{route('formatoEvaluacion.show', $formato->formato_tipo_evaluacion_id)}}">{{$formato->rubrica_evaluacion}}</a>
            </li> 
        @endforeach 
    </ul>

    {{$formatos->links()}}

@endsection