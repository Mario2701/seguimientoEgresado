@extends('layouts.plantillaShowJuntaDirectiva')
@section('title','Junta directiva: ' . $junta->junta_directiva_egresado_id )
@section('content')
    <h1>Codigo del egresado: {{$junta->egresado_id}}</h1>
    <a href="{{route('juntaDirectiva.index')}}">Volver a las evaluaciones</a>
    <p><strong>El periodo es: {{$junta->periodo_directiva}}</strong></p>
@endsection