<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipoAsiento;


class tipoasientoController extends Controller
{
    public function tipoAsiento(){
        $tipoAsientosfiltrados = tipoAsiento::query()->where('estado', 'like', 'A')->get();
        return view('tiposAsientos', compact('tipoAsientosfiltrados'));
    }

    public function showAgregar(){
        return view('agregarTipoAsiento');
    }

    public function agregar(Request $request){
        $asiento = new tipoAsiento();
        $asiento->descripcion = $request->input("descripcion");
        $asiento->precio = $request->input("precio");
        $asiento->estado = $request->input("estado");

        $asiento->save();

        return redirect('/');
    }

    public function editar($id){
        $asiento = tipoAsiento::find($id);
        return view('editarAsiento', compact('asiento'));
    }

    public function actualizar(Request $request, $id){
        $asiento = tipoAsiento::find($id);
        $asiento->descripcion = $request->input("descripcion");
        $asiento->precio = $request->input("precio");
        $asiento->estado = $request->input("estado");

        $asiento->save();

        return redirect('tiposAsientos');
    }

    public function eliminar($id){
        $asiento = tipoAsiento::find($id);
        $asiento->estado = 'I';

        $asiento->save();
        return redirect('tiposAsientos');
    }
}
