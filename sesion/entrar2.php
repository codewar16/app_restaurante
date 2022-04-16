<?php
    ob_start(); 
    require("../conexion/conex.php");  
    $usuario = $_POST['usuario'];
        $clave   = $_POST['contrasena'];
    session_start();  
    //---------------------------------------------
             $sql  =  $mysqli->query("SELECT * FROM usuarios WHERE usuario = '".$usuario."' ");
             echo   $siExisteAsig = mysqli_num_rows($sql);                 
        if($f = $sql->fetch_array()){
            if($clave==$f['clave']){
                                $_SESSION['estado']      = "1";
                                $_SESSION['cuenta']      = $usuario;
                                $_SESSION['nombresucursal']     =  $f['nombresucursal'];
                                
                    header('Location:../inicio.php');
            }else{
                echo '<script>alert("  '.$usuario.':  VERIFIQUE LA CONTRASEÑA !");  location.href = "../index.php";</script> ';
            }
                }else{
                    echo '<script>alert(" '.$usuario.' USUARIO NO EXISTE");  location.href = "../index.php";</script> '; 
                  }
?>