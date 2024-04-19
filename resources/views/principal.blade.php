@extends('adminlte::page')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menús</title>
    <!-- Incluir Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        .section-discover {
            margin-top: 40px; /* Separación entre secciones */
        }

        .section-explore {
            margin-top: 20px; /* Separación entre secciones */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('welcome') }}">Samantha Color</a> <!-- Redirige a la página /welcome -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item {{ Request::is('photos') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('photos') }}">Fotos</a>
                    </li>
                    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container mt-4">
        <h2>Bienvenido a nuestra aplicación inspirada en Adobe Color</h2>
        <p>Explora una variedad de paletas de colores inspiradas en la naturaleza, el arte y la creatividad. Encuentra la combinación perfecta de colores para tu próximo proyecto de diseño.</p>
        <p>¡Empieza a explorar ahora!</p>
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 300%; height: auto;">
                <div class="card-body">
                    <img src="https://assets.videomaker.com/2020/09/Adobe-Color-Wheel.gif" class="img-fluid" alt="Paleta de colores 3" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
        @yield('content')
    </main>
    <footer class="mt-5 py-2.5 bg-dark text-white">
        <div class="container text-center">
            Desarrollado por Samantha Ramirez.
        </div>
    </footer>

    <!-- Incluir Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
