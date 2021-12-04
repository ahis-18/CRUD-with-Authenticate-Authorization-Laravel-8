<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    
    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    
    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>

  </head>
  <body>

  
  <div class="container py-3">
    <header >
      <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
          <img src="https://laravel.com/img/logomark.min.svg" width="40" height="32" class="me-2">
          <span class="fs-4">Blog Sederhana - Laravel 8</span>
        </a>
  
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">

          @auth
            <div class="dropdown me-3 py-2">
              <a class="dropdown-toggle text-decoration-none text-success fw-bold" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
            
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                <li><hr class="dropdown-devider" href="#"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button class="dropdown-item">Logout</button>
                  </form>
                </li>
              </ul>
            </div>
            @else
            <a class="me-3 btn btn-outline-primary" href="/login">Login</a>
            <a class="me-3 btn btn-warning" href="/register">Register</a>
          @endauth

        </nav>
      </div>
    </header>
  
    <main>
        @yield('content-admin')
    
    </main>
  
  
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>