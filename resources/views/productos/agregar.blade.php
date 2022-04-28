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
                    <h2>Agregar Productos </h2>
                </div>
                <div class="mb-3 mt-4">
                    <label for="exampleFormControlInput1" class="form-label">ID Material</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ID Material">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row justify-content-evenly">
                    <div class="mb-3 col-6">
                        <label for="exampleFormControlInput1" class="form-label">Unidad de Medida</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Unidad de Medida">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="exampleFormControlInput1" class="form-label">Precio</label>
                        <input type="number" step="any" class="form-control" id="exampleFormControlInput1" placeholder="Precio">
                    </div>
                </div>
                <div class="col-12 botones d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            @csrf
                            <input type="submit" class="btn btn-outline-primary" value="Guardar">
                            <a href="/home">
                                <input type="button" class="btn btn-outline-dark" value="Regresar">
                            </a>
                        </div>

            </div>
        </div>
    </div>
</body>

</html>