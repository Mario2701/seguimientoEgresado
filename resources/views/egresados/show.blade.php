@extends('layouts.plantillaShowEgresado')
@section('title','Bienvenido: ' . $egresado->nombre_egresado)
@section('content')
    <h1>Bienvenido : {{$egresado->nombre_egresado}}</h1>
    <a href="{{route('egresados.index')}}">Volver a practicas</a>
    <p><strong>Su cargo en su empresa es: {{$egresado->cargo_empresa_egresado}}</strong></p>
@endsection


