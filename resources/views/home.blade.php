<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body >
        <nav class="navbar navbar  navbar-expand-lg  bg-primary">
            <div class="container flex justify-content-between">
              <a class="navbar-link" src="" href="{{route('home')}}">
                <img class="h-32px" src="{{url('asset/laracus.png')}}" alt="" srcset="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-0 mx-lg-3">
                  <li class="nav-item d-block d-lg-none d-xl-block">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item d-block d-lg-none d-xl-block">
                    <a class="nav-link" >Discussion</a>
                  </li>
                  <li class="nav-item d-block d-lg-none d-xl-block text-nowrap">
                    <a class="nav-link " >About Us</a>
                  </li>
                
                </ul>
                <form class="d-flex w-100 me-4 my-2 my-lg-0 " role="search" action="" method="GET">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><img src="{{url('asset/search.png')}}" alt=""></span>
                        <input class="form-control border-start-0 ps-0" type="search" placeholder="Search" aria-label="Search">
                    </div>
                
              
                </form>
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item my-auto">
                        <a class="nav-link text-nowrap" href="" >Log in</a>
                      </li>
                      <li class="nav-item ps-1 pe-0">
                        <a class="btn btn-primary-white" href="" >Sign Up</a>
                      </li>
                </ul>
              </div>
            </div>
          </nav>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
