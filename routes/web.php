<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba', ['name'=>'Adhemar']);
});
Route::get('/estudiantes', [EstudianteController::class, 'index']);


Route::resource('profesores', ProfesorController::class);
Route::resource('materias', MateriaController::class);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('chart', [ChartController::class, 'index']);