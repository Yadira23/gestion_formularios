<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\AdministradorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
Route::resource('dependencias', DependenciaController::class);
Route::resource('formularios', FormularioController::class);
Route::get('/admin/panel', [AdministradorController::class, 'panel'])->name('admin.panel');


// Formularios JSON
Route::get('/formulario/turismo', function () {
    return view('formularios.turismo');
})->name('formulario.turismo');

Route::post('/formulario/turismo/guardar', [FormularioController::class, 'guardarTurismo'])->name('formulario.turismo.guardar');


Route::get('/administrador/turismo/respuestas', [AdministradorController::class, 'verRespuestasTurismo'])->name('administrador.turismo.respuestas');




