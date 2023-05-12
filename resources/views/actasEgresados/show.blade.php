@extends('layouts.plantillaShowActaEgresado')
@section('title','Acta del egresado con id: ' . $acta->egresado_id)
@section('content')
    <h1>Bienvenido al acta del egresado con id: {{$acta->egresado_id}}</h1>
    <a href="{{route('actasEgresados.index')}}">Volver a practicas</a>
    <p><strong>Resultado: {{$acta->resultado_acta_egresado}}</strong></p>
@endsection


