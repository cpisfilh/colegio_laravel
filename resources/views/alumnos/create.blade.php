@extends('layouts.plantilla')

@section('title','Create')

@section('content')

    <h1>Aquí se creará un alumno</h1>

    <form action="{{route('alumnos.store')}}" method="POST">

        @csrf
        
        <label >
            Nombre:
            <input type="text" name="name"><br>
            @error('name')
            <h5>*{{$message}}</h5>
            @enderror
        </label>
        <br>
        <label >
            Grado:
            <input type="text" name="grade"><br>
            @error('grade')
            <h5>*{{$message}}</h5>
            @enderror
        </label>
        <br>
        <label >
            Sección:
            <input type="text" name="section"><br>
            @error('section')
            <h5>*{{$message}}</h5>
            @enderror
        </label>

        <button type="submit">Enviar datos</button>
    </form>


@endsection