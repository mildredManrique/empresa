@extends('layouts.master')

@section('title')
    Shopping Cart
@endsection

@section('content')
    @if(Session::has('cart'))
            <div class="row justify-content-center mt-3">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <ul class="list-group">
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Precio Total</th>
                                    <th scope="col">Cantidad de productos</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productos as $producto)
                                <tr>
                                    <th scope="row"><strong>{{ $producto['item']['id_material'] }}</strong></th>
                                    <td>{{ $producto['precio_1'] }}</td>
                                    <td>{{$producto['qty']}}</td>
                                </tr>
                        @endforeach

                            </tbody>
                        </table>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <strong>Total: {{ $totalPrice }}</strong>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center mt-3">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                   <button type="button" class="btn btn-success">Check Out</button>
                </div>
            </div>
    @else
        <div class="row justify-content-center mt-3">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items Cart!</h2>
            </div>
        </div>
    @endif
@endsection
