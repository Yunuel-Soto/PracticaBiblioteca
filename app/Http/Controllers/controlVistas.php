<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarClientes;
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
    public function showCliRegis(){
        return view('clientesRegostro');
    }
    public function Guardar(validarForm $req){
        $titulo = $req->input('titulo'); //Otra forma
        // $titulo = $_POST("titulo");
        return redirect()->route('regis')->with('guardar', $titulo);
    }
    public function GuardarCliente(validarClientes $req){
        $nombre = $req->input('nombre');
        return redirect()->route('shCl')->with('guardar', $nombre);
    }
}
