<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <link rel="stylesheet" href="{{URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css') }}">
</head>
<body>
    <nav class="navbar ">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">TODO</a>
          </div>
          
          <ul class="nav navbar-nav navbar-right">
            {{-- <li><a href="#"><i class="fa fa-user"></i> Sign Up</a></li>
            <li><a href="#"><span class="fa fa-log-in"></span> Login</a></li> --}}
          </ul>
        </div>
      </nav> 

    <div class="control-me-form">
      
        <form action="registered" method = "post" class="form">
            <label class="register">Register </label>
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
            
            @csrf
            <div class="form-group ">
              <label for="text">Username:</label>
              <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
              <label for="pwd">Email:</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="password" required>
              @error('password')
                  {{$message}}
              @enderror
            </div>
            <button type="submit" class="btn1 ">Submit</button>
            <p>Have account click <a href="/">here</a></p>
          </form> 
    </div>
</body>
</html>