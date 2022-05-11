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
            <div class="col-sm-8 mx-auto">
                <div class="card-header mt-4">
                    <h2>Agregar Clientes </h2>
                </div>
                <div class="card-header card2">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data"
                        class="row g-3">
                        <!-- <div class=" mt-4">
                            <label for="exampleFormControlInput1" class="form-label">ID Cliente</label>
                            <input type="number" class="form-control" name="id_cliente" placeholder="ID Cliente" required>
                        </div> -->
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Razón Social</label>
                            <input maxlength="60" type="text" class="form-control" name="razon_social"
                                placeholder="Razón social" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">RFC</label>
                            <input maxlength="15" type="text" class="form-control" name="rfc" placeholder="RFC"
                                required>
                        </div>
                        <div class="col-12 botones d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            @csrf
                            <input type="submit" class="btn btn-outline-primary" value="Guardar">
                            <a href="/clientes">
                                <input type="button" class="btn btn-outline-dark" value="Regresar">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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