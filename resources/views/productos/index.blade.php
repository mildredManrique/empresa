<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    @include('header')

    <div class="container">
        <div class="row">
            <div class="col mx-auto mt-3">
                <div class="card-header">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <h2>Productos
                        <a href="productos/agregar">
                            <input type="submit" class="btn btn-outline-primary" value="Agregar Producto">
                        </a>
                    </h2>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID_Material</th>
                            <th>Descripción</th>
                            <th>Unidad_Medida</th>
                            <th>Precio_1</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{$producto->id_material}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->unidad_medida}}</td>
                            <td>${{$producto->precio_1}}</td>
                            <td>
                                @csrf
                                <a href="{{'productos/'.$producto->id_material.'/editar'}}">
                                    <input type="submit" value="Editar" class="btn btn-outline-success">
                                </a>
                            </td>
                            <td>
                                <form action="{{route('productos.destroy', $producto->id_material)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" value="Eliminar" class="btn btn-outline-danger"
                                        onclick="return confirm('¿Seguro que desea eliminar...?')">
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('producto.addToCart', ['id_material' => $producto->id_material]) }}">
                                <button type="button" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                  </svg>                
                                </button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://your-site-or-cdn.com/fontawesome/v5.15.4/js/conflict-detection.js">
    </script>

</body>

<style>
.navbar-brand {
    margin-left: 50px;

}

.nav-link {
    margin-right: 50px;
}
</style>

</html>