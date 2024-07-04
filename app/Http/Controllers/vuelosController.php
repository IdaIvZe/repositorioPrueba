<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\vuelo;

class vuelosController extends Controller
{
    //

    public function vuelos(){
        return view('vuelos');
    }

    public function agregarVuelos(){
        return view('nuevoVuelo');
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
