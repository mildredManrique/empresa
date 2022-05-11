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
        <div class="row justify-content-center mt-3">
            <div class="col-md-4 col-md-offset-4">               
                <h1>Sign Up</h1>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                        <form action="{{ route('user.signup') }}" method="post">
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="text" class="form-control" id ="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                 <input type="password" class="form-control" id ="password" name="password">
                            </div>
                                <button type="submit" class="btn btn-primary mt-2">Sign Up</button>  
                                {{ csrf_field()}}                             
                            </form>
                        </div>
                    </div>   
                 </div>   
                    

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