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
            <a class="navbar-brand" href="{{ route('admin') }}">
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
                    <a href="{{ route('adminlogout') }}"><img width="35" height="35"
                            src="https://img.icons8.com/color-glass/48/exit.png" alt="exit" />Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="maincatbody">
        <h3>Add Catagory</h3><br>
        <form action="{{ url('/catagory/add') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="catagory_name" class="form-label">Catagory Name</label>
                <input type="name" class="form-control" id="catagory_name" name="catagory_name" value="{{ old('name') }}">
                @error('catagory_name')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="catagory_status" id="catagory_status"
                    value="enable">
                <label class="form-check-label" for="enable">Enabled</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="catagory_status" id="catagory_status"
                    value="dissable">
                <label class="form-check-label" for="disable">Dissabled</label>
            </div>
            @error('catagory_status')
                <p class='text-danger'>{{ $message }}</p>
            @enderror
            <br><br>
            <button type="submit" class="btn btn-primary">+Add</button>
        </form>
    </div>

</body>

</html>
