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

    <nav class="navbar navbar-expand-lg navbar-light bg-sotsfer">
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



    <div class="container">
        <h2>Administración de mesas</h2>
        <p class="text-peq-sotsfer">Selección/Asignación</p>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Mesas disponibles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!--<td style="background-color: #9C6F00; border-radius: 25px;">
                            <p style="font-size: 35px;">1</p> <i class="bi bi-clipboard2-check" style="font-size: 2.5em;"></i> <i class="bi bi-plus-circle" style="font-size: 1.5em;"></i>
                        </td> -->
                        <td>
                            <div class="col-sm-3 padding-sotsfer">
                                <div class="card bg-success text-white">
                                    <div class="card-header bold">1
                                    <!-- <button class="btn btn-warning">Marcar ocupada</button> -->
                                    </div>
                                    <div class="card-body">
                                    <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-play-circle-fill" style="font-size: 1.5em;"></i></a>
                                        <a data-toggle="modal" data-target="#myModal" title="Realizar pedido" href="#" class="btn btn-black text-light"><i class="bi bi-receipt-cutoff" style="font-size: 1.5em;"></i></a>
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-plus-circle" style="font-size: 1.5em;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-sm-3 padding-sotsfer">
                                <div class="card bg-success text-white">
                                    <div class="card-header bold">2</div>
                                    <div class="card-body">
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-plus-circle" style="font-size: 1.5em;"></i></a>
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-plus-circle" style="font-size: 1.5em;"></i></a>
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-plus-circle" style="font-size: 1.5em;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Mesas ocupadas (individuales)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>
                            <div class="col-sm-3 padding-sotsfer">
                                <div class="card bg-warning text-white">
                                    <div class="card-header bold text-black">4</div>
                                    <div class="card-body">
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-play-circle-fill" style="font-size: 1.5em;"></i></a>
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-receipt-cutoff" style="font-size: 1.5em;"></i></a>
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-forward-fill" style="font-size: 1.5em;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>

                        <td>
                            <div class="col-sm-3 padding-sotsfer">
                                <div class="card bg-warning text-white">
                                    <div class="card-header bold text-black">5</div>
                                    <div class="card-body">
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-play-circle-fill" style="font-size: 1.5em;"></i></a>
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-receipt-cutoff" style="font-size: 1.5em;"></i></a>
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-forward-fill" style="font-size: 1.5em;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Mesas ocupadas (unidas)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>
                            <div class="col-sm-3 padding-sotsfer">
                                <div class="card bg-danger text-white">
                                    <div class="card-header bold text-ligth">4</div>
                                    <div class="card-body">
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-play-circle-fill" style="font-size: 1.5em;"></i></a>
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-receipt-cutoff" style="font-size: 1.5em;"></i></a>
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-forward-fill" style="font-size: 1.5em;"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 padding-sotsfer">
                                <div class="card bg-danger text-white">
                                    <div class="card-header bold text-ligth">5</div>
                                    <div class="card-body">
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-play-circle-fill" style="font-size: 1.5em;"></i></a>
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-receipt-cutoff" style="font-size: 1.5em;"></i></a>
                                        <a title="Asignar mesa" href="#" class="btn btn-black text-light"><i class="bi bi-forward-fill" style="font-size: 1.5em;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>



    </div>
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
    </button> -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pedido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">.col-md-4</div>
                            <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
                            <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9">
                                Level 1: .col-sm-9
                                <div class="row">
                                    <div class="col-8 col-sm-6">
                                        Level 2: .col-8 .col-sm-6
                                    </div>
                                    <div class="col-4 col-sm-6">
                                        Level 2: .col-4 .col-sm-6
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
        
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>