<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>HTML5 Login Form with validation Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="content" style="width: 30%;margin-top:2cm;margin-left:35%">
        <div class="heading" style="text-align: center">
            <h1>login</h1>
        </div>
        @if($errors->any())
        <div>
            <ul class='alert alert-danger'>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </div>
        @endif
        <form action="{{url('login')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name='email'>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name='password'>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>