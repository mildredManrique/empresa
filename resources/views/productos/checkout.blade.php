@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>Pagar </h1>
            <h4>Total a pagar: ${{ $total }}</h4>
            <form action="{{ route('checkout')}}" method="post" id="checkout-form">
                <div class="row mt-5">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" placeholder="Nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="address" placeholder="Dirección" required>
                    </div>
                    <div class="mb-3">
                        <label for="card-name" class="form-label">Nombre del Titular</label>
                        <input type="text" class="form-control" id="card-name" placeholder="Nombre del Titular" required>
                    </div>
                    <div class="mb-3">
                        <label for="card-number" class="form-label">Número de Tarjeta</label>
                        <input type="text" class="form-control" id="card-number" placeholder="Número de Tarjeta" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="card-expiry-month" class="form-label">Mes de caducidad</label>
                        <input type="text" class="form-control" id="card-expiry-month" placeholder="Mes de caducidad" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="card-expiry-year" class="form-label">Año de caducidad</label>
                        <input type="text" class="form-control" id="card-expiry-year" placeholder="Año de caducidad" required>
                    </div>
                    <div class="mb-3">
                        <label for="card-cvc" class="form-label">CVC</label>
                        <input type="text" class="form-control" id="card-cvc" placeholder="CVC" required>
                    </div>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Pagar Ahora</button>
            </form>
        </div>
    </div>
@endsection