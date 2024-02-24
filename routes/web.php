<?php

use App\Http\Controllers\ProductoController;
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

Route::get('/', function () {
    return view('general.index');
})->name('/');



Route::get('formulario',[ProductoController::class,'create'])->name('Formulario');
Route::get('todos',[ProductoController::class,'index'])->name('todos');
Route::get('/ver/{id}',[ProductoController::class,'show'])->name('ver');


//mostrar categorias
Route::get('guitarras',[ProductoController::class,'mostrarguitarras'])->name('guitarras');
Route::get('bajos',[ProductoController::class,'mostrarbajos'])->name('bajos');




Route::resource( 'productos', ProductoController::class);
