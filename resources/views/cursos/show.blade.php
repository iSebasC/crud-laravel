@extends('layouts.plantilla')

@section('title','Curso ' . $curso)

@section('content')

    {{-- Solo llamar a la variable con doble llave {{$curso}} --}}

    <h1>Bienvenido al curso: {{$curso}}</h1>
@endsection