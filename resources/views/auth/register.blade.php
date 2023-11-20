<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/style.css')}} ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>


<body>
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
        <div class="card bg-light text-muted" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

    <form action="{route('register)}}" method="POST">
            @csrf
            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Registro de Usuario</h2>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeNombreX" name="nombre" class="form-control form-control-lg" placeholder="Nombre" />
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeApellidoX" name="apellido" class="form-control form-control-lg" placeholder="Apellido" />
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeUsuarioX" name="nombreUsuario" class="form-control form-control-lg" placeholder="Usuario" />
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeCedulaX"  name="cedula" class="form-control form-control-lg" placeholder="Cedula" />
              </div>

              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" placeholder="Email" />
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeFechaNacX" name="fechaNacimiento" class="form-control form-control-lg" placeholder="Fecha de Nacimiento" />
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" placeholder="Contraseña" />
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typeConfpassX" name="password_confirmation"class="form-control form-control-lg" placeholder="Confirmar Contraseña" />
              </div>


              <button class="btn btn-lg px-5 text-white bg-secondary" type="submit">Registrar</button>


            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</section>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>