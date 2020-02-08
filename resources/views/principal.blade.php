<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- fuentes para tituño-->
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/plantilla.css">

    <title>Municipalidad de Puente Piedra</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div id="app">
    <!-- header-->
    <nav class="navbar navbar-expand-lg navbar-background">
        <a class="navbar-brand navbar-brand-bo" href="#">MDPP</a>
        <div class="collapse navbar-collapse" id="  ">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navbar-nav-st">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mantenimiento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gestión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contácto</a>
                </li>
            </ul>
            <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex navbar-nav-st">
                <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                        <a class="dropdown-item" href="#" style="color:black">Perfil</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-item nav-link  mr-md-2" href="#" id="bd-versions">Salir</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- fin header-->

    <!-- contenido -->
    @yield('contenido')
    <!--fin contenido -->
    </div>
    <!--footer-->
    <footer class="footer">
        <div class="container-fluid">
            <span>USUARIO: VELASQUEZ VILLAFRANCA ABEL</span><span> | </span><span>PC: GAT-052</span><span> | </span><span>IP: 192.168.25.7</span><span> |</span>
        </div>
    </footer>
    <!--fin de footer-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/plantilla.js"></script>
    <script src="js/app.js"></script>
</body>

</html>