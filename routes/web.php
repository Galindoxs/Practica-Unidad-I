<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\principalController;
use App\Http\Controllers\tipoasientoController;
use App\Http\Controllers\vueloController;
use App\Http\Controllers\vuelos_asientoController;

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

Route::get('/', [principalController:: class, 'inicio'])->name('principal.inicio');

Route::get('/tiposAsientos', [tipoasientoController:: class, 'tipoAsiento'])->name('tipoasiento.inicio');

Route::get('/agregar', [tipoasientoController:: class, 'showAgregar'])->name('tipoasiento.agregar');

Route::post('/agregar/asientos', [tipoasientoController:: class, 'agregar'])->name('tipoasiento.agregarNuevo');

Route::get('/eliminar/{id}', [tipoasientoController:: class, 'eliminar'])->name('tipoasiento.eliminar');

Route::get('/editar/{id}', [tipoasientoController:: class, 'editar'])->name('tipoasiento.editar');

Route::put('/actualizar/{id}', [tipoasientoController:: class, 'actualizar'])->name('tipoasiento.actualizar');

//Vuelos
Route::get('/vuelos', [vueloController:: class, 'vuelo'])->name('vuelo.inicio');

Route::get('/vuelos/agregar', [vueloController:: class, 'agregar'])->name('vuelo.agregar');

Route::post('/vuelos/nuevo', [vueloController:: class, 'nuevoVuelo'])->name('vuelo.agregarNuevo');
