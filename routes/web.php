<?php

use App\Http\Controllers\controlBD;
use App\Http\Controllers\controlBD_users;
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

Route::get('/', [controlVistas::class, 'showPrincipal'])->name('main');

// Route::post('guardar', [controlVistas::class, 'Guardar'])->name('save');

// Route::get('clientesRegistro', [controlVistas::class, 'showCliRegis'])->name('shCl');
// Route::post('guardarCl', [controlVistas::class, 'GuardarCliente'])->name('saveCl');

Route::get('libros', [controlBD::class, 'index'])->name('libros.consulta');
Route::get('libros/create', [controlBD::class, 'create'])->name('libros.create');
Route::post('libros', [controlBD::class, 'store'])->name('libros.store');
//Para eliminar y actualizar
Route::get('libros/edit/{id}', [controlBD::class, 'edit'])->name('libros.edit');
Route::PUT('libros/update/{id}', [controlBD::class, 'update'])->name('libros.update');
Route::get('libros/show/{id}', [controlBD::class, 'show'])->name('libros.show');
Route::delete('libros/destroy/{id}', [controlBD::class, 'destroy'])->name('libros.destroy');

// RUTAS DE USUARIOS
Route::get('users',[controlBD_users::class, 'index'])->name('user.index');
Route::get('users/create', [controlBD_users::class, 'create'])->name('user.create');
Route::post('users', [controlBD_users::class, 'store'])->name('user.store');
//para eliminar y actualizar
Route::get('users/edit/{id}', [controlBD_users::class, 'edit'])->name('user.edit');
Route::PUT('users/update/{id}', [controlBD_users::class, 'update'])->name('user.update');
Route::get('users/show/{id}', [controlBD_users::class, 'show'])->name('user.show');
Route::delete('users/destroy/{id}', [controlBD_users::class, 'destroy'])->name('user.destroy');
