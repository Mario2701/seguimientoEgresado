@extends('layouts.plantillaShowCronogramaEgresado')
@section('title','Conograma del egresado con id: ' . $cronograma->numero_cronograma)
@section('content')
    <h1>Bienvenido al cronograma del egresado con id: {{$cronograma->numero_cronograma}}</h1>
    <a href="{{route('cronogramasEgresados.index')}}">Volver a practicas</a>
    <p><strong>Periodo: {{$cronograma->periodo_cronograma}}</strong></p>
@endsection


