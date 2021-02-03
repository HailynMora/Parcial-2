<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Libros extends Controller
{
    public function listado(){
        $libros = DB::table('libros as lib')
                    ->join('editorial as edt', 'lib.editorial', '=', 'edt.id')
                    ->select('lib.id','lib.ISBN', 'lib.titulo',  'lib.stok', 'lib.precio','edt.nombre')
                    ->get();
        return view('libros.listado', ['libros' => $libros]);

    }
}
