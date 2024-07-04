<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\vuelo;

class vuelosController extends Controller
{
    //

    public function vuelosMostrar(){
        $vuelos = vuelo::all();
        return view('vuelos', compact('vuelos'));
    }

    public function agregarVuelos(){
        return view('nuevoVuelo');
    }

    // public function nvoVueloGuardar(Request $request){
    //     $nvoVuelo = new vuelo();
    //     $nvoVuelo->numeroVuelo = $request->numero;
    //     $nvoVuelo->origen = $request->origen;
    //     $nvoVuelo->destino = $request->destino;
    //     $nvoVuelo->fechaSalida = $request->fechaVuelo;
    //     $nvoVuelo->numeroAsientos = $request->cantidad;
    //     $nvoVuelo->save();
    //     return redirect()->route('inicio.vuelos.mostrar');
    // }

    public function nvoVueloGuardar(Request $request){

        $existeVuelo = vuelo::where('numeroVuelo', $request->numero)
        ->whereDate('fechaSalida', $request->fechaVuelo)->exists();

        if($existeVuelo){
            return redirect()->route('inicio.vuelos.mostrar');
        }
        else{
            $nvoVuelo = new vuelo();
            $nvoVuelo->numeroVuelo = $request->numero;
            $nvoVuelo->origen = $request->origen;
            $nvoVuelo->destino = $request->destino;
            $nvoVuelo->fechaSalida = $request->fechaVuelo;
            $nvoVuelo->numeroAsientos = $request->cantidad;
            $nvoVuelo->save();
            return redirect()->route('inicio.vuelos.mostrar');
        }
    }

    public function editarVuelos(){
        return view('editarVuelo');
    }

    public function eliminarVuelo($id){
        $eliminarVuelo = vuelo::find($id);
        $eliminarVuelo->delete();

        return redirect('/inicio/vuelos');
    }


}
