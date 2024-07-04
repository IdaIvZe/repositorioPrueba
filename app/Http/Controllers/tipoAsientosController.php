<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipoAsiento;

class tipoAsientosController extends Controller
{
    //

    // public function mostrarTipoAsiento(){
    //     $tiposAsientos = tipoAsiento::all();
    //     return view('tiposAsientos', compact('tiposAsientos'));
    // }

    public function mostrarTipoAsiento(){
        $tiposAsientos = tipoAsiento::where('estado', 'A')->get();
            return view('tiposAsientos', compact('tiposAsientos'));
    }

    public function agregarTipoAsiento(){
        return view('agregarTipoAsiento');
    }

    public function guardar(Request $request){
        $nvoAsiento = new tipoAsiento();
        $nvoAsiento->descripcion = $request->descripcion;
        $nvoAsiento->precio = $request->precio;
        $nvoAsiento->estado = $request->estado;
        $nvoAsiento->save();
        //return redirect('/inicio/asientos/tipos');
        return redirect()->route('asiento.tipos.mostrar');
    }
}
