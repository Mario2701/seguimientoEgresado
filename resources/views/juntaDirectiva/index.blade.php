@extends('layouts.plantillaIndexJuntaDirectiva')
@section('title','Trabajo')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('juntaDirectiva.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($juntas as $junta)
            <li>
               <a href="{{route('juntaDirectiva.show', $junta->junta_directiva_egresado_id)}}">{{$junta->periodo_directiva}}</a>
            </li> 
        @endforeach 
    </ul>

    {{$juntas->links()}}

@endsection