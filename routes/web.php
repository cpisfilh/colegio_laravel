<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(StudentController::class)->group(function(){

    Route::get('alumnos','index')->name('alumnos');

    Route::get('alumnos/create','create')->name('alumnos.create');
    
    Route::get('alumnos/{alumno}','show')->name('alumnos.show');

    Route::get('alumnos/{alumno}/edit','edit')->name('alumnos.edit');
    
});
//Para mandar datos
Route::post('alumnos',[StudentController::class,'store'])->name('alumnos.store');

Route::put('alumnos/{alumno}',[StudentController::class,'update'])->name('alumnos.update');








