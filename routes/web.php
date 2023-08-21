<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CoordinadorController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\Proyectos_ofertadosController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

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
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::resource('/vista', AlumnoController::class);

Route::resource('/area', AreaController::class);

Route::resource('/coordinador', CoordinadorController::class);

Route::resource('/proyectos_ofertados', Proyectos_ofertadosController::class);

Route::resource('/menu', MenuController::class);


