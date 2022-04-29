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
                <div class="card-header mt-4">
                    <h2>Editar Clientes </h2>
                </div>
                <div class="card-header card2">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('clientes.update', $cliente->id_cliente) }}" method="POST"
                        enctype="multipart/form-data" class="row g-3">

                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label">Razón social</label>
                            <input type="text" class="form-control" name="razon_social"
                                value="{{ $cliente->razon_social }}" required>
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label">RFC</label>
                            <input type="text" step="any" class="form-control" name="rfc" value="{{ $cliente->rfc}}"
                                required>
                        </div>

                        <div class="col-12 botones d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            @csrf
                            @method('PUT')
                            <input type="submit" class="btn btn-outline-primary" value="Actualizar">
                            <a href="/clientes">
                                <input type="button" class="btn btn-outline-dark" value="Regresar">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>