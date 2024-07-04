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
        //if($tiposAsientos->estado = 'A'){
            return view('tiposAsientos', compact('tiposAsientos'));
        //}
    }

    public function agregarTipoAsiento(){
        return view('agregarTipoAsiento');
    }
}
