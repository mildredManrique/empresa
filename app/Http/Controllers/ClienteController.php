<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){

        $clientes = Cliente::latest()->get();

        return view ('clientes.index', [
            'clientes' => $clientes
        ]);
    }


    public function store(Request $request){

        Cliente::create([            
            'razon_social' => $request->razon_social,
            'rfc' => $request->rfc
        ]);

        return back()->with('status', 'Creado con éxito');   
     }


    public function create(){
        
        return view('clientes.agregar');  

     }


     public function edit($id_cliente)
     {
        $cliente = Cliente::where('id_cliente', '=', $id_cliente)->first();       
        
        return view('clientes.editar', compact('cliente')) ;
     }


     public function update(Request $request, $id_cliente)
    {
        DB::table('clientes')
        ->where('id_cliente', $id_cliente)
        ->update([
            'razon_social' => $request->razon_social,
            'rfc' => $request->rfc,
        ]);
        
        return back()->with('status', 'Actualizado con éxito');
    }
    

    public function destroy($id_cliente){

        $cliente = Cliente::where('id_cliente', '=', $id_cliente)->delete();       

        return back();

    }
}
