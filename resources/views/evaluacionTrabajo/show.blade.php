@extends('layouts.plantillaShowEvaluacionTrabajo')
@section('title','Trabajo: ' . $evaluacionT->evaluacion_trabajos_id)
@section('content')
    <h1>Codigo de Evaluacion: {{$evaluacionT->evaluacion_trabajos_id}}</h1>
    <a href="{{route('evaluacionTrabajo.index')}}">Volver a las evaluaciones</a>
    <p><strong>Descripcion: {{$evaluacionT->descripcion_evaluacion_trabajo}}</strong></p>
@endsection