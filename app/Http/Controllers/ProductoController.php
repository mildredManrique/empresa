<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){

        $productos = Producto::latest()->get();

        return view ('productos.index', [
            'productos' => $productos
        ]);

    }

    public function store(Request $request){

        Producto::create([
            'id_material'=>$request->id_material,
            'descripcion' => $request->descripcion,
            'unidad_medida' => $request->unidad_medida,
            'precio_1' => $request ->precio_1
        ]);

        return back()->with('status', 'Creado con éxito');   
     }

     public function create(){

        
        return view('productos.agregar');   
     }

     public function edit(Request $request){

        Producto::edit([
            'descripcion' => $request->descripcion,
            'unidad_medida' => $request->unidad_medida,
            'precio_1' => $request ->precio_1
        ]);

        return back();   
     }

    public function destroy($id_material){

        $producto = Producto::where('id_material', '=', $id_material)->delete();       

        return back();

    }
}
