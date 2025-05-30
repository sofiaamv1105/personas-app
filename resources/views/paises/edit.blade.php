<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Pais</title>
  </head>
  <body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('comunas.index') }}">Comunas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('departamentos.index') }}">Departamentos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('municipios.index') }}">Municipios</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('paises.index') }}">Países</a></li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container">
    <h1>Edit Pais</h1>
    <form method="POST" action="{{ route('paises.update', ['pais' => $pais->pais_codi]) }}">
    @method('put')
    @csrf
        <div class="mb-3">
            
          <label for="id" class="form-label">Code</label>
          <input type="text" class="form-control" id="pais_codi" name="pais_codi"
          desabled="disabled" value="{{ $pais->pais_codi }}">
          <div id="idHelp" class="form-text">Pais Code</div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="pais_nomb" name="pais_nomb" placeholder="Nombre del país"
          value="{{ $pais->pais_nomb }}">  

        </div>

        <div class="mb-3">
          <label for="name" class="form-label">capi</label>
          <input type="text" class="form-control" id="pais_capi" name="pais_capi" placeholder="Nombre del país"
          value="{{ $pais->pais_capi }}">  

        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">update</button>
        <a href="{{ route('paises.index') }}" class="btn btn-warning">Cancel</a>
        </div>
    </form>
    </div>>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>