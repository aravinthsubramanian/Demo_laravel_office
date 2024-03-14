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
                    <a href="{{ route('adminlogout') }}"><img width="35" height="35"
                            src="https://img.icons8.com/color-glass/48/exit.png" alt="exit" />Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content" style="width: 70%;margin-top:2cm;margin-left:15%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Catagory</th>
                    <th scope="col">SubCatagory</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                </tr>
            </thead>
            <tbody>
                <?php $sn = 1; ?>
                @foreach ($subcatagory as $subcat)
                    <tr>
                        <th scope="row">{{ $sn++ }}</th>
                        <td>{{ $subcat->catagory }}</td>
                        <td>{{ $subcat->subcatagory }}</td>
                        <td>{{ $subcat->subcatagory_status }}</td>
                        <td>{{ $subcat->created_at }}</td>
                        <td>{{ $subcat->updated_at }}</td>

                        <td><a type="button" data-bs-toggle="modal" data-bs-target="#myModal">
                                <img width="20" height="20"
                                    src="https://img.icons8.com/color/48/delete-forever.png" alt="delete-forever" />
                            </a></td>
                    </tr>

                    <div class="modal" tabindex="-1" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p>Are you want to Delete?</p>
                                </div>
                                <div class="modal-footer" id="myInput">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <a type="button" href="{{ url('delsubcat/' . $subcat->id) }}"
                                        class="btn btn-danger">Confirm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')
        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>

</body>

</html>
