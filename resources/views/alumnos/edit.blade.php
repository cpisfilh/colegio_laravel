@extends('layouts.plantilla')

@section('title','Edit')

@section('content')

    <h1>Aquí se editará un alumno</h1>

    <form action="{{route('alumnos.update',$alumno)}}" method="POST">

        @csrf
        @method('put')
        
        <label >
            Nombre:
            <input type="text" name="name" value="{{$alumno->name}}"><br>
            @error('name')
            <h5>*{{$message}}</h5>
            @enderror
        </label>
        <br>
        <label >
            Grado:
            <input type="text" name="grade" value="{{$alumno->grade}}"><br>
            @error('grade')
            <h5>*{{$message}}</h5>
            @enderror
        </label>
        <br>
        <label >
            Sección:
            <input type="text" name="section" value="{{$alumno->section}}"><br>
            @error('section')
            <h5>*{{$message}}</h5>
            @enderror
        </label>

        <button type="submit">Enviar datos</button>
    </form>


@endsection