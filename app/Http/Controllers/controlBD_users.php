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
            "email" => $req->input('email'),
            "ine" => $req->input('ine'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('users/create')->with('guardarUser', 'abc');
    }

    public function show($id)
    {
        $datos = DB::table('tb_users')->where('idUsers', $id)->first();
        return view('eliminarUs', compact('datos'));
    }


    public function edit($id)
    {
        $datos = DB::table('tb_users')->where('idUsers', $id)->first();
        return view('editarUs', compact('datos'));
    }

    public function update(validarClientes $req, $id)
    {
        $result= DB::table('tb_users')->where('idUsers', $id)->update([
            "nombre" => $req->input('nombre'),
            "email" => $req->input('email'),
            "ine" => $req->input('ine')
        ]);

        return redirect('users')->with('edicionU', 'abc');
    }

    public function destroy($id)
    {
        DB::table('tb_users')->where('idUsers', $id)->delete();
        return redirect('users')->with('eliminacionU', 'abc');
    }
}
