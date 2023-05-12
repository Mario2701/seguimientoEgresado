@extends('layouts.plantillaShowReunion')
@section('title','Id de la reunion: ' . $reunion->reunion_id)
@section('content')
    <h1>El id de la reunion es: {{$reunion->reunion_id}}</h1>
    <a href="{{route('reuniones.index')}}">Volver a practicas</a>
    <p><strong>El lugar de la reunion es: {{$reunion->lugar_reunion}}</strong></p>
@endsection