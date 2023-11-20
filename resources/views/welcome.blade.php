<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Principal</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/style.css')}} ">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body >
        
    <div class="row navbar">
    <div class="col">
   
      </div>
      <div class="col Menu">
      <form class=" d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar Productos" aria-label="Search">
        <button class="btn btn-outline-success " type="submit">Buscar</button>
      </form>  
        <div class=" d-flex ">
          <a href="{{ url('/') }}" class="nav-link menu  "><span class="material-symbols-outlined ">
home
</span></a>
          <a href="info.html" class="nav-link menu "><span class="material-symbols-outlined">
gavel
</span></a>
          <a href="{{ url('/login') }}" class="nav-link menu "><span class="material-symbols-outlined">
person
</span></a>
      </div>
    </div>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        </div>
      </div>
    </div>
  </div>
    </body>
</html>
