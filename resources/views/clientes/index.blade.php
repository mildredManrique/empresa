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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <a class="navbar-brand " href="#">Nombre de Empresa</a>

            <a class="nav-link" href="/">Productos</a>

        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mx-auto">
                <div class="card-header">
                    <h2>Clientes
                        <a href="clientes/agregar">
                            <input type="button" class="btn btn-outline-primary" value="Agregar Clientes">
                        </a>
                    </h2>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID_Cliente</th>
                            <th>Razón Social</th>
                            <th>RFC</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->id_cliente}}</td>
                            <td>{{$cliente->razon_social}}</td>
                            <td>{{$cliente->rfc}}</td>
                            <td>
                                @csrf
                                <a href="{{'clientes/'.$cliente->id_cliente.'/editar'}}">
                                    <input type="submit" value="Editar" class="btn btn-outline-success">
                                </a>
                            </td>
                            <td>
                                <form action="{{route('clientes.destroy', $cliente->id_cliente)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" value="Eliminar" class="btn btn-outline-danger"
                                        onclick="return confirm('¿Seguro que desea eliminar...?')">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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