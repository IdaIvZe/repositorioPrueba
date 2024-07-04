<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\vueloAsiento;
use  App\Models\vuelo;

class vuelosAsientosController extends Controller
{
    //

    public function agregarAsiento(){
        $nvoAsiento = vueloAsiento::all();
        return view('AgregarAsiento', compact('nvoAsiento'));
    }

    

    public function asientoVueloAgregar(Request $request, $id){
       // $vuelo = vuelo::find($id);
        $asientoAgregar = new vueloAsiento();
        $asientoAgregar->idTipoAsiento = $request->idTipoAsiento;
        $asientoAgregar->numeroAsiento = $request->numeroAsiento;
        $asientoAgregar->save();
        return redirect()->route('inicio.vuelos.mostrar');
    }

    public function verAsientos($id){
        $verAsientos = vueloAsiento::find($id);
        return view('vueloAsientos', compact('verAsientos'));
    }

}
