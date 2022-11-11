@extends('layouts.plantilla')

@section('title','Index')

@section('content')

    <h1>Este es el index de alumnos</h1>
    <a href="{{route('alumnos.create')}}">Nuevo alumno</a>
    <br>
    
    <ul>
        @foreach($alumno as $alumno)
            <li><a href="{{route('alumnos.show',$alumno)}}">{{$alumno->name}}</a></li>
        @endforeach
    </ul>

@endsection