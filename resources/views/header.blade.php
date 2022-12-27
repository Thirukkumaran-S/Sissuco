<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->



    </head>
    <body>
    <nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->

    <ul class="nav justify-content-end">
        @guest
            @if($message=Session::get('success'))
                <div class="alert alert-info">
                    {{ $message  }}
                </div>
            @endif
 
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('registration')}}">Registration</a>
            </li>
            @else
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
        @endguest
    </ul>
    </nav>
    <div>
   
        @yield('content')

    </div>

    
    

    </body>
    
</html>

</html>