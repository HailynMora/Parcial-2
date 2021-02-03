<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicio;
use App\Http\Controllers\Editoriales;
use App\Http\Controllers\Libros;

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

Route::get('/', [inicio::class, 'index']); 

Route::get('/libros/listado', [Libros::class, 'listado'])->name('listLibros'); 
Route::get('/Editorial/listado', [Editoriales::class, 'index'])->name('listEditorial'); 
Route::post('/Editorial/registrar', [Editoriales::class, 'formularioReg'])->name('fromregistrar'); 
Route::post('/Editorial/registrar', [Editoriales::class, 'registrar'])->name('registrar'); 
Route::post('/Editorial/actualizar/{id}', [Editoriales::class, 'formularioAct'])->name('from');
Route::post('/Editorial/actualizar/{id}', [Editoriales::class, 'actualizar'])->name('actualizarEdit');