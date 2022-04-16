<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>MESAS</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-sotsfer fixed-top">
        <a class="navbar-brand titulo-empresa" href="#">Sotsfer - Restaurante</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Mesas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pedidos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Facturas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Opción1</a>
                        <a class="dropdown-item" href="#">Opción1</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Opción1</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Opción Adcional</a>
                </li>
            </ul>
            <!--<form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Búsqueda" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>-->
            HOLA,
            <a href="index.php">salir</a>
        </div>
    </nav>
    &nbsp;&nbsp;&nbsp;



    <div class="container container-sotsfer">
        <h2>Administración de mesas</h2>
        <p class="text-peq-sotsfer">Creación de mesas</p>
        <!-- <div class="form-row">
            <div class="col">

                <a class="btn btn-warning btn-sotsfer" href="estado_mesas.php">Ver estado de mesas</a>
            </div>
        </div> -->
        &nbsp;&nbsp;
        <form action="/action_page.php" class="">
            <div class="form-row">
                <div class="col-md-2">
                    <label for="uname" class="bold">Columnas:</label>
                    <input type="text" class="form-control" id="email" placeholder="columnas" name="email">
                </div>
                <div class="col-md-2">
                    <label for="uname" class="bold">Filas:</label>
                    <input type="password" class="form-control" placeholder="filas" name="pswd">
                </div>

            </div>

            <div class="form-row">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-sotsfer">Enviar</button>
                    <a class="btn btn-warning btn-sotsfer" href="estado_mesas.php">Ver estado de mesas</a>
                </div>

            </div>

        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>