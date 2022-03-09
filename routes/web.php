<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/alumno', [AlumnoController::class, 'inicio'])->middleware('alumno');;

Route::get('/profesor', [ProfesorController::class, 'inicio'])->middleware('profe');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/resultado', [ProfesorController::class, 'resultado'])->middleware('profe');
