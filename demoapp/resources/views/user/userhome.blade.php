<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <div class="headcon">
        <div class="container-fluid" style="margin-top: 3mm;">
            <a class="navbar-brand" href="#">
                <img width="50" height="50" src="https://img.icons8.com/nolan/64/laravel.png" alt="laravel" />
                <b>DemoApp</b>
            </a>
        </div>
        <div class="login">
            <img width="50" height="50" src="https://img.icons8.com/ios-filled/100/user-male-circle.png"
                alt="laravel" style="border-radius: 50%;" />
            <div class="dropdown">
                <button class="dropbtn">Hi! login</button>
                <div class="dropdown-content">
                    <a href="{{ route('userlogout') }}"><img width="35" height="35"
                            src="https://img.icons8.com/color-glass/48/exit.png" alt="exit" />Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <br><br><br><br>
        <h1>Wellcome User0001.......</h1>
    </div>
    <br><br><br>


    @if (Session::has('success'))
        <div class="toast align-items-center position-absolute top-0 end-0 bg-success" role="alert">
            <div class="toast-header">
                <img width="30" height="30" src="https://img.icons8.com/color/48/checked--v1.png"
                    alt="checked--v1" />
                <strong class="mr-auto">{{ Session::get('success') }}</strong>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('.toast').toast('show');
            });
        </script>
    @endif

</body>

</html>
