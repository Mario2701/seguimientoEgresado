@extends('layouts.plantillaShowRequisitoEgresado')
@section('title','Id del requsito: ' . $requisito->requisito_egresados_id)
@section('content')
    <h1>El id del requisito es: {{$requisito->requisito_egresados_id}}</h1>
    <a href="{{route('requisitoEgresado.index')}}">Volver a practicas</a>
    <p><strong>El informe de plan de trbajo es: {{$requisito->certificado_egresado}}</strong></p>
@endsection