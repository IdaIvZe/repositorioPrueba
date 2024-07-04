<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vuelosAsientosController extends Controller
{
    //

    public function agregarAsiento(){
        return view('AgregarAsiento');
    }

    public function verAsientos(){
        return view('vueloAsientos');
    }
}
