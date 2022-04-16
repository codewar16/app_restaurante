<?php
mysqli_report(MYSQLI_REPORT_STRICT);//Considera el warning como un error, y as�� tratar la excepci��n.

////////////////// CONEXION A LA BASE DE DATOS //////////////////

try {
    $conexion = new mysqli('ws.sotsferenterprise.com:3308','root','Admin2019sot','restaurante');
                      $acentos = $conexion->query("SET NAMES 'utf8'"); 
                   date_default_timezone_set('America/Guayaquil');
//   echo 'connect success';
} catch (Exception $e){
    echo '<head><meta charset="gb18030">
     <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         <title>Sotsferenterprise</title>
         <style type="text/css">
          h1  { text-align: center; color:white}
         </style>
         </head>
        <body>
           <section class="material-half-bg">
              <div class="cover">    <h1><br>Sitio en mantenimiento</h1></div>
            </section>
        <section class="login-content">
        <div class="logo">
            <img src="../img/LOGO_SIMPLIFICADO2.png"  name="logo_app" id="logo_app">
        </div>
        </section>
    </body>';
    // width="100%" height="50%"
    // echo 'ERROR:'.$e->getMessage();
}


// $host="ws.sotsferenterprise.com:3308";
// $usuario="root";
// $contrasena="Admin2019sot";
// $base="sotsferapp";

// $conexion = new mysqli($host, $usuario,$contrasena, $base);

//     $acentos = $conexion->query("SET NAMES 'utf8'"); 
//   date_default_timezone_set('America/Guayaquil');
// if 
//     ($conexion -> connect_errno) 
// {
//     echo "Error de conexión";
//     die( "Fallo la conexion : (" . $conexion -> mysqli_connect_errno(). ") " . $conexion -> mysqli_connect_error());
// }else
//   echo "conexion OK";
?>