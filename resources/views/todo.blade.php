
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
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.css') }}">
</head>
<body>
    <nav class="navbar ">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">TODO</a>
          </div>
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> Welcome: {{session('name')}}</a></li>
            <li><a href="logout"><span class="fa fa-log-out"></span> Sign out</a></li>
          </ul>
        </div>
      </nav> 
      
    <div class="container">
        <form class="form-me" action="" method="post">
           <input type="text"  name="" id="" placeholder="Search">
           <button type="submit" class=""><i class="fa fa-user"></i></button>
        </form>
    </div>

    <div class="my-con">
        {{-- <h1>Welcome: {{session('name')}}</h1> --}}
        <div class="todo-container">
          <div class="todo">
           <form action="add" method="post">
              @csrf
              <input type="hidden" name="foregink" value="{{session("id")}}">
              <input type="text"  name="todolist"  placeholder="add todo">
              <button type="submit" >add</button><br>
              <p style="color: red; margin-left: 50px; margin-top: 10px;">@error('todolist')
                {{$message}}
            @enderror</p>
           </form>
          </div><hr>
          <div class="todos">
            
            @foreach ($todoss as $user)    
           
              <div class="todos-container" id="{{$user->id}}">
                  <div class="check"><input type="checkbox" class="checked" onclick="CHECKONOFF({{$user->id}})" id="{{$user->id}}"></div>
                  <div class="list" >{{$user->todolist}}</div>
                  <p class="text"></p>
                 
                  

                  <div class="delete">
                    <form action="todoDelete" method="post">
                      @csrf
                    <input type="hidden" name="idSele" value="{{$user->id}}">
                        <button type="submit">delete</button>
                    </form>
                  </div>
              </div>
              
            
              @endforeach

              
          </div>
        </div>
    </div>

    <script>
      function CHECKONOFF(p)
      {
        var collector = document.getElementById(p);
        var x = collector.getElementsByClassName("checked")[0].checked;
        collector.getElementsByClassName("list")[0].style.textDecoration="line-through";
      }
    </script>
</body>
</html>
