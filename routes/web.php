<?php

use App\Http\Controllers\controlVistas;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('principal');
// });

// Route::get('regis', function(){
//     return view('registro');
// });

Route::get('Registro', [controlVistas::class, 'showRegistro'])->name('regis');
Route::get('/', [controlVistas::class, 'showPrincipal'])->name('main');

Route::post('guardar', [controlVistas::class, 'Guardar'])->name('save');

Route::get('clientesRegistro', [controlVistas::class, 'showCliRegis'])->name('shCl');
Route::post('guardarCl', [controlVistas::class, 'GuardarCliente'])->name('saveCl');
