@extends('layouts.plantillaIndexPlanTrabajo')
@section('title','Plan de Trabajo')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('planTrabajo.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($planes as $plane)
            <li>
               <a href="{{route('planTrabajo.show', $plane->plan_trabajo_id)}}">{{$plane->informe_plan_trabajo}}</a>
            </li>
        @endforeach 
    </ul>

    {{$planes->links()}}

@endsection