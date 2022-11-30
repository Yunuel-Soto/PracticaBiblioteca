<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarForm;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon; //Para las fechas de registro, actualizacion y eliminacion
use Illuminate\Auth\Events\Validated;
class controlBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::table('tb_libros')->get();
        return view('consultaLibros', compact('result'));
    }

    public function create()
    {
        return view('registro');
    }

    public function store(validarForm $req)
    {
        DB::table('tb_libros')->insert([
            "titulo" => $req->input('titulo'),
            "autor" => $req->input('autor'),
            "isbn" => $req->input('isbn'),
            "editorial" => $req->input('editorial'),
            "paginas" => $req->input('paginas'),
            "email" => $req->input('email'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('libros/create')->with('guardado', 'abc');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

    }


    public function update(validarForm $req, $id)
    {
        $result= DB::table('tb_libros')->where('idLibro', $id)->update([
            'titulo' => $req->input('titulo'),
            'autor' => $req->input('autor'),
            'isbn' => $req->input('isbn'),
            'editorial' => $req->input('editorial'),
            'paginas' => $req->input('paginas'),
            'email' => $req->input('email')
        ]);
        return redirect('libros')->with('edicion', 'abc');
    }

    public function destroy($id)
    {
        DB::table('tb_libros')->where('idLibro', $id)->delete();
        return redirect('libros')->with('eliminar', 'abc');
    }
}
