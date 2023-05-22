<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EstadisticasController;

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

Route::view('/', 'enunciado');

Route::get('/alunno/ciclo', [UserControler::class, 'mostrar']);
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/nuevoAlumno', [UserControler::class, 'nuevoAlumno']);
Route::post('/crear/nuevoAlumno', [UserControler::class, 'crearAlumno']);

Route::get('/estadisticas', [EstadisticasController::class, 'mediaCentro']);