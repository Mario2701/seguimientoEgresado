@extends('layouts.plantillaShowPlanTrabajo')
@section('title','Id del plan: ' . $plan->cronograma_egresado_id)
@section('content')
    <h1>El id del plan de trabajo es: {{$plan->cronograma_egresado_id}}</h1>
    <a href="{{route('planTrabajo.index')}}">Volver a practicas</a>
    <p><strong>El informe de plan de trbajo es: {{$plan->informe_plan_trabajo}}</strong></p>
@endsection