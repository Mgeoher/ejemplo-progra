<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class CatedraticoController extends Controller
{
    function index(){
        $datos = Proveedor::orderBy('codigo_proveedor','desc')->paginate(5);
        return view('home', compact('datos'));
    }
    function create(){
        return view('agregar');
    }
    function edit ($id){
        $proveedor = Proveedor::find($id);
        return view('actualizar', compact('proveedor'));
    }
    function show($id){
        $proveedor = Proveedor::find($id);
        return view('eliminar', compact('proveedor'));
    }
    function store(Request $request){
        $proveedor = new Proveedor();
        $proveedor->codigo_proveedor = $request->post("codigo_proveedor");
        $proveedor->nombre_proveedor = $request->post('nombre_proveedor');
        $proveedor->direccion = $request->post('direccion');
        $proveedor->telefono = $request->post('telefono');
        $proveedor->save();

        return redirect()->route('Catedratico.index')->with('success',"agregado con exito");
    }
    function update(Request $request, $id){
        $proveedor = Proveedor::find($id);
        $proveedor->codigo_proveedor = $request->post("codigo_proveedor");
        $proveedor->nombre_proveedor = $request->post('nombre_proveedor');
        $proveedor->direccion = $request->post('direccion');
        $proveedor->telefono = $request->post('telefono');
        $proveedor->save();

        return redirect()->route('Catedratico.index')->with('success',"actualizado con exito");

    }
    function destroy($id){
       $proveedor = Proveedor::find($id);
       $proveedor->delete();
       return redirect()->route("Catedratico.index")->with("succes", "Eliminado con exito");

    }
}
