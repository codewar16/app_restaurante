<?php
$mysqli = new mysqli("ws.sotsferenterprise.com:3308","root","Admin2019sot","restaurante"); 
        //servidor, usuario de base de datos, contrasenia del usuario, nombre de base de datos
        $acentos = $mysqli->query("SET NAMES 'utf8'");

		if(mysqli_connect_errno()){
		echo 'Estámos arreglando el problema : ', mysqli_connect_error();
		exit();
	}else{
	     echo 'ok';
	}
?>


