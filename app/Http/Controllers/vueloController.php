<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vuelo;

class vueloController extends Controller
{
    public function vuelo(){
        $vuelos = vuelo::all(); 
        return view('vuelos', compact('vuelos'));
    }

    public function agregar(){
        return view('nuevoVuelo');
    }

    public function nuevoVuelo(Request $request){

        $nvoVuelo = new vuelo();

        $nvoVuelo->numeroVuelo = $request->input('numeroVuelo');
        $nvoVuelo->origen = $request->input('origen');
        $nvoVuelo->destino = $request->input('destino');
        $nvoVuelo->numeroAsiento = $request->input('numeroAsiento');
        $nvoVuelo->fechaSalida = $request->input('fechaSalida');

        $nvoVuelo->save();

        return redirect('vuelos');

    }
}
