<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Departamentos</title>
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
    <h1>Listado de Departamentos</h1>
    <a href="{{ route('departamentos.create') }}" class="btn btn-sucess">Add</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Pais</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($departamentos as $departamento)
  <tr>
      <th scope="row">{{ $departamento->depa_codi }}</th>
      <td>{{ $departamento->depa_nomb }}</td>
      <td>{{ $departamento->pais_nomb }}</td>
      <td>  
      <a href="{{route('departamentos.edit',['departamento'=>$departamento->depa_codi]) }}"
      class="btn btn-info"> Edit </a></li>

           <form action="{{ route('departamentos.destroy', ['departamento' => $departamento->depa_codi]) }}"
          method="POST" style="display: inline-block">
        @method('delete')
        @csrf
        <input class="btn btn-danger" type="submit" value="Delete">
    </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
  </body>
</html>