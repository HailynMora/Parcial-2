<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Editorial;
class Editoriales extends Controller
{
    public function index(){
        
        $editorial = Editorial::all();

        return view('Editorial.listado', ['editorial' => $editorial]);   
    }
    public function formularioReg()
    {
        $editorial = Editorial::all();
        return view('Editorial.from_registro', compact('editorial'));
    }


    public function registrar(Request $request)
    {
        // Registro de una Categoria en la base de datos a traves del Modelo
        $edt = new Editorial();
        $edt->nombre = $request->input('nombre');
        $edt->direccion = $request->input('direccion');
        $edt->ciudad = $request->input('ciudad');
        $edt->telefono = $request->input('telefono');
        $edt->save();
        return redirect()->route('listado');
    }

    public function formularioAct($id){
        $editorial = Editorial::findOrFail($id);
        return view('Editorial.from_actualizar', compact('editorial'));
    }


    public function actualizar(Request $request, $id){
        // Realizar la actualizacion en la base de datos
        $edit = Editorial::findOrFail($id);
        $edit->nombre = $request->input('nombre');
        $edit->direccion = $request->input('direccion');
        $edit->ciudad = $request->input('ciudad');
        $edit->telefono = $request->input('telefono');   
        $edit->save();
        return redirect()->route('listado');
    }

    public function eliminar($id){
        $edit = Editorial::findOrFail($id);
        $edit->delete();
        return redirect()->route('listado');
    }


}
