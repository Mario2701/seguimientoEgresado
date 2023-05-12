@extends('layouts.plantillaShowTipoCargo')
@section('title','Id del cargo: ' . $tipo->tipo_cargo_id )
@section('content')
    <h1>El id del tipo de cargo es: {{$tipo->tipo_cargo_id }}</h1>
    <a href="{{route('tipoCargos.index')}}">Volver a practicas</a>
    <p><strong>La descripcion del cargo es: {{$tipo->decripcion_cargo}}</strong></p>
@endsection