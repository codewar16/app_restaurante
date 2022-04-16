<?php
////////////////// CONEXION A LA BASE DE DATOS //////////////////

$host="ws.sotsferenterprise.com:3308";
$usuario="root";
$contrasena="Admin2019sot";
$base="restaurante"; 



$conexion = new mysqli($host, $usuario,$contrasena, $base);

    $acentos = $conexion->query("SET NAMES 'utf8'"); 
   date_default_timezone_set('America/Guayaquil');
if 
    ($conexion -> connect_errno) 
{
    die( "Fallo la conexion : (" . $conexion -> mysqli_connect_errno(). ") " . $conexion -> mysqli_connect_error());
}else
   //echo"conexion OK";
?>