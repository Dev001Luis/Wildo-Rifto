<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wildo-Rifto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>
    <div class="cont2">
  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img class="logo1" src="/media/wrLogo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-space-between">
        <li class="nav-item">
            <a class="nav-link text-white mx-3" href="{{route('map')}}">Map</a>
          </li>
        <li class="nav-item">
            <a class="nav-link text-white mx-3" href="{{route('introduction')}}">Intro</a>
        </li>
        <li class="nav-item dropdown text-white mx-3">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Characters
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('all-Characters')}}">All Characters</a></li>
            <li><a class="dropdown-item" href="{{route('all-Supports')}}">Supports</a></li>
            <li><a class="dropdown-item" href="#">Adc</a></li>
            <li><a class="dropdown-item" href="#">Mid Laners</a></li>
            <li><a class="dropdown-item" href="#">Top Laners</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white mx-3" href="#">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mx-3" href="#">Links</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mx-3" href="#">Download</a>
          </li>
      </ul>
      {{-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}
    </div>
  </div>
</nav>
</div>
<div class="container my-5">
    <div class="row justify-content-center ">
        {{--verifico la presenza @dd($characters); --}}
        @foreach($characters as $character)
            <div class="col-12 col-lg-4">
                <div class="card mx-3">
                    <img src="{{$character['img']}}" class="card-img-top " alt="...">
                    <div class="card-body text-center">
                    <h5 class="card-title">{{$character['name']}} - {{$character['class']}}</h5>
                
                    <p class="card-text">Character's ID is: #{{$character['id']}}.</p>
                    <a href="{{route('details',['id'=>$character['id']])}}" class="btn btn-primary">Take a look!</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>