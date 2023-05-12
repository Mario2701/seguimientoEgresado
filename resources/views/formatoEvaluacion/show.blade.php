@extends('layouts.plantillaShowFormatoEvaluacion')
@section('title','Formto: ' . $formato->formato_tipo_evaluacion_id)
@section('content')
    <h1>Codigo del formato: {{$formato->formato_tipo_evaluacion_id}}</h1>
    <a href="{{route('formatoEvaluacion.index')}}">Volver a las evaluaciones</a>
    <p><strong>La rubrica de evaluacion es: {{$formato->rubrica_evaluacion}}</strong></p>
@endsection