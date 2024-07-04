<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tipoAsientosController;
use App\Http\Controllers\vuelosController;
use App\Http\Controllers\vuelosAsientosController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function (){
    return view('inicio');
})->name('menu.principal');

Route::get('/inicio/asientos/tipos', 
            [tipoAsientosController::class, 'mostrarTipoAsiento'])->name('asiento.tipos.mostrar');

Route::get('/inicio/asientos/tipos/agregar',
            [tipoAsientosController::class, 'agregarTipoAsiento'])->name('asiento.tipos.agregar');

Route::get('/inicio/vuelos',
            [vuelosController::class, 'vuelosMostrar'])->name('inicio.vuelos.mostrar');

Route::get('/inicio/vuelos/agregar',
            [vuelosController::class, 'agregarVuelos'])->name('inicio.vuelos.agregarNuevo');

Route::get('/inicio/vuelos/editar',
            [vuelosController::class, 'editarVuelos'])->name('inicio.vuelos.editar');

Route::get('/inicio/vuelos/eliminar/{id}',
            [vuelosController::class, 'eliminarVuelo'])->name('inicio.vuelos.eliminar');

Route::get('/inicio/vuelos/agregarAsiento',
            [vuelosAsientosController::class, 'agregarAsiento'])->name('inicio.vuelos.agregarAsiento');

Route::get('/inicio/vuelos/verAsientos',
            [vuelosAsientosController::class, 'verAsientos'])->name('inicio.vuelo.verAsientos');

Route::post('/inicio/vuelo/agregarAsiento/guardar',
            [tipoAsientosController::class, 'guardar'])->name('agregar.asiento.guardar');

Route::get('/inicio/asientos/tipos/eliminar/{id}',
            [tipoAsientosController::class, 'cambiarEstadoAsiento'])->name('asiento.tipos.cambiarEstado');

Route::get('/inicio/asientos/tipos/editar/{id}',
            [tipoAsientosController::class, 'editarAsiento'])->name('asiento.tipo.editar');

Route::put('/inicio/asientos/tipos/editar/guardar/{id}',
            [tipoAsientosController::class, 'guardarEdicion'])->name('asiento.tipo.editar.guardar');

Route::post('/inicio/vuelos/agregarNuevo/guardar',
            [vuelosController::class, 'nvoVueloGuardar'])->name('inicio.vuelos.agregarNuevo.guardar');