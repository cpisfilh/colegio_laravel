<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $alumno =Student::all();
        return view('alumnos.index',compact('alumno'));
    }

    public function create(){
        return view('alumnos.create');
    }

    public function show(Student $alumno){
        return view('alumnos.show',compact('alumno'));
    }

    public function edit(Student $alumno){
        return view('alumnos.edit',compact('alumno'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'grade'=>'required',
            'section'=>'required',
        ]);

        $alumno = new Student();

        $alumno->name = $request->name;
        $alumno->grade = $request->grade;
        $alumno->section = $request->section;

        $alumno->save();

        return redirect()->route('alumnos.show',$alumno);
    }

    public function update(Student $alumno,Request $request){

        $request->validate([
            'name'=>'required',
            'grade'=>'required',
            'section'=>'required',
        ]);
        $alumno->name = $request->name;
        $alumno->grade = $request->grade;
        $alumno->section = $request->section;

        $alumno->save();

        return redirect()->route('alumnos.show',$alumno);
    }

    
}
