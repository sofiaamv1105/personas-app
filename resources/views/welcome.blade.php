<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        body {
            padding-top: 70px; /* espacio para navbar fijo */
        }
    </style>
</head>
<body class="bg-light">

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

<!-- Panel principal -->
<div class="container py-5">
    <h1 class="text-center mb-5 text-primary">Bienvenido al Panel Principal</h1>

    <div class="row g-4">
        <!-- Card Comunas -->
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('comunas.index') }}" class="text-decoration-none text-dark">
                <div class="card card-hover border-primary">
                    <div class="card-body text-center">
                        <i class="bi bi-building text-primary fs-1 mb-3"></i>
                        <h5 class="card-title">Comunas</h5>
                        <p class="card-text">Ir al listado</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card Departamentos -->
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('departamentos.index') }}" class="text-decoration-none text-dark">
                <div class="card card-hover border-success">
                    <div class="card-body text-center">
                        <i class="bi bi-geo-alt text-success fs-1 mb-3"></i>
                        <h5 class="card-title">Departamentos</h5>
                        <p class="card-text">Ir al listado</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card Municipios -->
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('municipios.index') }}" class="text-decoration-none text-dark">
                <div class="card card-hover border-warning">
                    <div class="card-body text-center">
                        <i class="bi bi-map text-warning fs-1 mb-3"></i>
                        <h5 class="card-title">Municipios</h5>
                        <p class="card-text">Ir al listado</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card Países -->
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('paises.index') }}" class="text-decoration-none text-dark">
                <div class="card card-hover border-danger">
                    <div class="card-body text-center">
                        <i class="bi bi-globe text-danger fs-1 mb-3"></i>
                        <h5 class="card-title">Países</h5>
                        <p class="card-text">Ir al listado</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>