<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="content" style="width: 30%;margin-top:2cm;margin-left:35%">
        <div class="heading" style="text-align: center">
            <h1>register</h1>
        </div>
        
        <form action="{{url('register')}}" method="POST">
          @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name='name'>
                @error('name')
                  <p class='text-danger'>{{$message}}</p>
                @enderror
              </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name='email'>
              @error('email')
                  <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="number" class="form-control" id="mobile" name='mobile'>
                @error('mobile')
                  <p class='text-danger'>{{$message}}</p>
                @enderror
              </div>
            <div class="mb-3">
              <label for="new_password" class="form-label">New Password</label>
              <input type="password" class="form-control" id="new_password" name='new_password'>
              @error('new_password')
                  <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="text" class="form-control" id="confirm_password" name='confirm_password'>
                @error('confirm_password')
                  <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>