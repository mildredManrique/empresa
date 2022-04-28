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
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
            <div class="card-header">
                <h2>Productos <a href="/agregar"><button type="submit" class="btn btn-outline-primary">Agregar
                            producto</button></a></h2>
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
                        <td>{{$producto->descripción}}</td>
                        <td>{{$producto->unidad_medida}}</td>
                        <td>{{$producto->precio_1}}</td>
                        <td>
                        <form action="{{route('productos.edit',  $producto)}}" method="POST">                               
                                @csrf
                                <a hrf="#">
                                <input
                                    type="submit"
                                    value="Editar"
                                    class="btn btn-outline-success"
                                    >
                                </a>
                        </form>
                        </td>
                        <td>
                            <form action="{{route('productos.destroy', $producto->id_material)}}" method="POST">
                             @method('POST')
                             @csrf
                                <input
                                    type="submit"
                                    value="Eliminar"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿{{$producto->id_material}}?')">

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

</html>