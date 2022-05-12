<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Cart;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

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

     

     public function edit($id_material)
     {
        $producto = Producto::where('id_material', '=', $id_material)->first();       
        
        return view('productos.editar', compact('producto')) ;
     }



     public function update(Request $request, $id_material)
    {
        DB::table('productos')
        ->where('id_material', $id_material)
        ->update([
            // 'id_material' => $request->id_material,
            'descripcion' => $request->descripcion,
            'unidad_medida' => $request->unidad_medida,
            'precio_1' => $request->precio_1,
        ]);
        
        return back()->with('status', 'Actualizado con éxito');
    }    

    public function destroy($id_material){

        $producto = Producto::where('id_material', '=', $id_material)->delete();       

        return back();

    }

    public function getAddToCart(Request $request, $id_material){
        // $producto = Producto::find($id_material);
        $producto = Producto::where('id_material',  $id_material)->first();  
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->add($producto, $producto->id_material);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));        
        return redirect('/');
    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('productos.shopping-cart', ['productos' =>null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('productos.shopping-cart', ['productos' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}