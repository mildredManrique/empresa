@extends('layouts.master')

@section('title')
    Shopping Cart
@endsection

@section('content')
    @if(Session::has('cart'))
            <div class="row justify-content-center mt-3">
                <div class="col mx-auto mt-3">
                    <ul class="list-group">
                        
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Precio por Pz</th>                                    
                                    <th scope="col">Cantidad de productos</th>
                                    <th scope="col">Precio Total</th>
                                    <th colspan=2>&nbsp;</th>
                                    <th colspan=2>&nbsp;</th>
                                    <th colspan=2>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productos as $producto)
                                <tr>
                                    <th scope="row"><strong>{{ $producto['item']['id_material'] }}</strong></th>
                                    <td>{{$producto['item']['precio_1']}}</td>
                                    <td>{{$producto['qty']}}</td>
                                    <td>{{$producto['precio_1'] }}</td>
                                    <td><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                      </svg></a>
                                    </td>
                                    <td><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-square" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                      </svg></a>
                                    </td>
                                    <td><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                      </svg></a>
                                    </td>
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col mx-auto mt-3">
                    <strong>Total: {{ $totalPrice }}</strong>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center mt-3">
                <div class="col mx-auto mt-3">
                   <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Pagar</a>
                </div>
            </div>
    @else
        <div class="row justify-content-center mt-3">
            <div class="col mx-auto mt-3">
                <h2>No hay nada en el carrito</h2>
            </div>
        </div>
    @endif
@endsection
