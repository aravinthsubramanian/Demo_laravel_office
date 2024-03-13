<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    {{-- <div class="auto-close alert alert-success" role="alert">
        A simple success alert—check it out!
    </div> --}}

    <!-- As a heading -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">DemoApp</span>
        </div>
    </nav> 
        
    <div class="content" style="width: 70%;margin-top:2cm;margin-left:15%">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">S.no</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
              </tr>
            </thead>
            <tbody>
                <?php $sn = 1; ?>
                @foreach ($users as $user)  
                <tr>
                <th scope="row">{{$sn++}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->mobile}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

    </div>
</body>
</html>