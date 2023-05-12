@extends('layouts.plantillaShowEvaluacionEgresado')
@section('title','Empresa: ' . $evaluacion->evaluacion_egresado_id )
@section('content')
    <h1>Codigo de Evaluacion: {{$evaluacion->evaluacion_egresado_id }}</h1>
    <a href="{{route('evaluacionEgresados.index')}}">Volver a practicas</a>
    <p><strong>Tendra un formato con codigo: {{$evaluacion->formato_tipo_evaluacion_id}}</strong></p>
@endsection


