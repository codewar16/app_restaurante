<?php session_start();
if ($_SESSION['estado'] == null) {
  echo "<script>location.href='index.php'</script>";
}
include "conexion/conex.php";
//require("class/personal.php");
?>
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
    <title>INICIO</title>
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
                    <a class="nav-link text-white" href="adm_mesas.php">Mesas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Pedidos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="adm_facturas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link text-white" href="adm_cliente.php">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled text-white" href="acerca_app.php">Introducción</a>
                </li>
               
            </ul>
            <form class="form-inline my-2 my-lg-0 text-white">
            Hola: NombreUsuario &nbsp;&nbsp;
            <a href="sesion/logout.php" type="button" class="btn btn-success my-2 my-sm-0 salida-empresa" type="submit">Salir</a>
            </form>
            <!--<form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Búsqueda" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>-->
           
        </div>
    </nav>

    <!--
    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Secondary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Success card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Danger card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>

-->

    <div class="container container-sotsfer">
        <div class="card-group">
            <div class="col-sm-3 padding-sotsfer">
                <div class="card bg-warning text-black">
                    <div class="card-header bold">Pedidos</div>
                    <i class="bi bi-menu-up" style="font-size: 8em; text-align: center;"></i>
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <!-- <h5 class="card-title">Mesas disponibles</h5> -->
                        <!-- <p class="card-text">Muestra las mesas disponibles/asignar</p> -->
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        <a href="#" class="btn btn-black text-light">Realizar pedido</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 padding-sotsfer">
                <div class="card bg-primary text-white">
                    <div class="card-header bold">Facturas</div>
                    <i class="bi bi-file-ruled-fill" style="font-size: 8em; text-align: center;"></i>
                    <div class="card-body">


                        <a href="#" class="btn btn-black text-light">Facturar Pedido</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 padding-sotsfer">

                <div class="card bg-success text-white">
                    <div class="card-header bold">Mesas</div>
                    <i class="bi bi-grid-fill" style="font-size: 8em; text-align: center;"></i>
                    <div class="card-body">

                        <a href="adm_mesas.php" class="btn btn-black text-light">Asignar Mesa</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 padding-sotsfer">

                <div class="card bg-danger text-white">
                    <div class="card-header bold">Clientes</div>
                    <i class="bi bi-person-lines-fill" style="font-size: 8em; text-align: center;"></i>
                    <div class="card-body">


                        <a href="adm_cliente.php" class="btn btn-black text-light">Agregar Cliente</a>
                    </div>
                </div>
            </div>


        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>