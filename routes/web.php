<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;


Route::get('/', function () {
    /* return view('welcome'); */
    /* return view('alumnos.inicio'); */
    return redirect('/alumnos');
});

Route::resource('alumnos', AlumnoController::class);
