<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarClientes;
use DB;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;

class controlBD_users extends Controller
{

    public function index()
    {
        $result = DB::table('tb_users')->get();
        return view('consultaUser', compact('result'));
    }

    public function create()
    {
        return view('registroUser');
    }

    public function store(validarClientes $req)
    {
        DB::table('tb_users')->insert([
            "nombre" => $req->input('nombre'),
            "email" => $req->input('correo'),
            "ine" => $req->input('ine')
        ]);
        return redirect('users/create')->with('guardarUser', 'abc');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(validarClientes $req, $id)
    {
        $dato = DB::table('tb_users')->where('id', $id)->update([
            "nombre" => $req->input('nombre'),
            "email" => $req->input('correo'),
            "ine" => $req->input('ine')
        ]);
        return redirect('users')->with('edicionU', 'abc');
    }

    public function destroy($id)
    {
        //
    }
}
