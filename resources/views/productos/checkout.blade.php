@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
            <h1>Pagar </h1>
            <h4>Total a pagar: ${{ $total }}</h4>
            <input id= "total" type="hidden" display="none" value="{{$total}}">
            <form action="{{ route('checkout')}}" method="post" id="checkout-form">
                <div class="row mt-5">
                    <div class="mb-3">
                        <label for="cash" class="form-label">Pago en Efectivo</label>
                        <input type="number" class="form-control" id="cash" placeholder="Efectivo" required onkeyup="suma()">
                    </div>
                    <div class="mb-3">
                        <label for="change" class="form-label">Cambio: </label>
                        <input type="number" class="form-control" id="change"  disabled>
                    </div>                    
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Pagar Ahora</button>
            </form>
        </div>
    </div>

    <script>
        var a = document.getElementById("total").value;
        var b = "";
        var c = "";        

        function suma(){
            b = document.getElementById("cash").value;
            c = b-a;

            document.getElementById("change").value = c;
        }

    </script>

@endsection