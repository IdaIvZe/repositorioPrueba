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

    public function cambiarEstadoAsiento(Request $request, $id){
        $nvoEstado = tipoAsiento::find($id);
        $nvoEstado->estado = 'I';
        $nvoEstado->save();
        return redirect()->route('asiento.tipos.mostrar');
    }

    public function editarAsiento(Request $request, $id){
        $asientoEditar = tipoAsiento::find($id);
        return view('editarAsiento', compact('asientoEditar'));
    }

    public function guardarEdicion(Request $request, $id){
        $asientoEditar = tipoAsiento::find($id);
        $asientoEditar->descripcion = $request->descripcion;
        $asientoEditar->precio = $request->precio;
        $asientoEditar->estado = $request->estado;
        $asientoEditar->save();
        return redirect()->route('asiento.tipos.mostrar');
    }
}
