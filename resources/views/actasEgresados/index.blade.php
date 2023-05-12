@extends('layouts.plantillaIndexActaEgresado')
@section('title','Home')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('actasEgresados.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($actas as $acta)
            <li>
               <a href="{{route('actasEgresados.show', $acta->acta_egresado_id)}}">{{$acta->egresado_id}}</a>
            </li>
        @endforeach 
    </ul>

    {{$actas->links()}}

@endsection