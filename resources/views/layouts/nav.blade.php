<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Audio Plus</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <h1 class="navbar-brand " style="color: white">Audio Plus</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" style="background: white
            " data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse links" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Destacados</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('Formulario')}}">Formulario</a>
                  </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contactos</a>
                    </li>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" style="color: white"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </button>
                        <ul class="dropdown-menu"
                            style=" background: #000000;  
                background: -webkit-linear-gradient(to right, #434343, #000000);  
                background: linear-gradient(to right, #434343, #000000);  ">
                            <li><a class="dropdown-item" href="{{route('todos')}}">Todos</a></li>
                            <li><a class="dropdown-item" href="{{route('guitarras')}}">Guitarras</a></li>
                            <li><a class="dropdown-item" href="{{route('bajos')}}">Bajos</a></li>
                            <li><a class="dropdown-item" href="#">Baterías y percusión</a></li>
                            <li><a class="dropdown-item" href="#">Teclados y pianos</a></li>
                            <li><a class="dropdown-item" href="#">Instrumentos de viento</a></li>
                            <li><a class="dropdown-item" href="#">Instrumentos de cuerda</a></li>
                            <li><a class="dropdown-item" href="#">Accesorios para instrumentos</a></li>
                            <li><a class="dropdown-item" href="#">Equipo de grabación</a></li>
                            <li><a class="dropdown-item" href="#">Equipo de sonido y PA</a></li>
                            <li><a class="dropdown-item" href="#">Equipo de iluminación</a></li>
                            <li><a class="dropdown-item" href="#">Partituras y libros</a></li>
                            <li><a class="dropdown-item" href="#">Accesorios</a></li>
                            <li><a class="dropdown-item" href="#">Repuestos</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    @yield('contenido')

</body>

</html>
