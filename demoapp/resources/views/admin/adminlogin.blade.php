<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</head>

<body>

    <div class="headlog">
        <div class="container-fluid" style="margin-top: 3mm;">
            <a class="navbar-brand" href="#">
                <img width="50" height="50" src="https://img.icons8.com/nolan/64/laravel.png" alt="laravel" />
                <b>DemoApp</b>
            </a>
        </div>
    </div>

    <div class="content" style="width: 30%;margin-top:2cm;margin-left:35%">

        @if (Session::has('error'))
            <div class="toast align-items-center position-absolute top-0 end-0 bg-danger" role="alert">
                <div class="toast-header">
                    <img width="30" height="30" src="https://img.icons8.com/color/48/cancel--v1.png"
                        alt="cancel--v1" />
                    <strong class="mr-auto">{{ Session::get('error') }}</strong>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.toast').toast('show');
                });
            </script>
        @endif


        <div class="heading" style="text-align: center">
            <h1>Admin login</h1>
        </div>

        <form action="{{ url('admin/login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name='email' value="{{ old('email') }}">
                @error('email')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name='password'>
                @error('password')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
