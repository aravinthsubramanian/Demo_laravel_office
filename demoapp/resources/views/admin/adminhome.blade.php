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

    <div class="conbody">
        <div class="conitems">
            <a type="button" href="{{ route('adminregister') }}">Admin Registration</a>
        </div>
        <div class="conitems">
            <a type="button" href="{{ route('userregister') }}">User Registration</a>
        </div>
        <div class="conitems">
            <a type="button" href="{{ route('viewcatagory') }}">Add Catagory</a>
        </div>
        <div class="conitems">
            <a type="button" href="{{ route('viewsubcatagory') }}">Add Sub Catagory</a>
        </div>
        <div class="conitems">
            <a type="button" href="{{ route('viewadmins') }}">View Admins</a>
        </div>
        <div class="conitems">
            <a type="button" href="{{ route('viewusers') }}">View Users</a>
        </div>
        <div class="conitems">
            <a type="button" href="{{ route('showcatagory') }}">View Catagory</a>
        </div>
        <div class="conitems">
            <a type="button" href="{{ route('showsubcatagory') }}">View Sub Catagory</a>
        </div>
        <div class="conitems">
            <a type="button" href="{{ route('viewtextadder') }}">View Text Adder</a>
        </div>
        <div class="conitems">
            <a type="button" href="{{ route('viewimageadder') }}">View Image Adder</a>
        </div>
    </div>

</body>

</html>
