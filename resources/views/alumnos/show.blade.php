
@extends('layouts.plantilla')

@section('title','Show')

@section('content')

    <H1>mostrar alumno {{$alumno->name}}</H1>
    <a href="{{route('alumnos')}}">Regresar a alumnos</a>
    <a href="{{route('alumnos.edit',$alumno)}}">Editar alumno</a>

    <strong>grado: </strong><br>
    {{$alumno->grade}}
    <strong>seccion: </strong><br>
    {{$alumno->section}}
@endsection