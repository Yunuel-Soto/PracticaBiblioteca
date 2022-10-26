<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validarForm;

class controlVistas extends Controller
{
    public function showRegistro(){
        return view('registro');
    }
    public function showPrincipal(){
        return view('principal');
    }
    public function Guardar(validarForm $req){
        return redirect()->route('regis')->with('guardar', 'Libro guardado');
    }
}