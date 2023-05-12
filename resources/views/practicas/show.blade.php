@extends('layouts.plantillaShow')
@section('title','Practica: ' . $practica->titulo)
@section('content')
    <h1>Bienvenido al procedimiento: {{$practica->titulo}}</h1>
    <a href="{{route('practicas.index')}}">Volver a practicas</a>
    <p><strong>Codigo: {{$practica->codigo}}</strong></p>
@endsection