<?php
ob_start();
require("../conexion/conexion_i.php");
session_start();

   echo $usuario = $_POST['usuario'];
    $clave   = $_POST['contrasena'];


class Conexion {
    // Ignore copiar los atributos

    public function __construct() {
        try {
           $sql = $conexion->query("SELECT * FROM usuarios WHERE usuario = '".$usuario."'" );

                if($f = $sql->fetch_array()){
                    if($clave==$f['clave']){
                                $_SESSION['estado']      = "1";
                                $_SESSION['usuario']      = $usuario;
                                $_SESSION['nombresucursal']     =  $f['nombresucursal'];

                             header('Location:../hola.php');
                }else{
                    echo '<script>alert("  '.$usuario.':  VERIFIQUE LA CONTRASEÑA !");  location.href = "../index.php";</script> '; 	
                }
            }else{
                echo '<script>alert(" '.$usuario.' USUARIO NO EXISTE");  location.href = "../index.php";</script> '; 
            }
        }

        catch(PDOException $e)  {
            $error = $sql->_error = $e->getMessage();
            $sql->error($error);
        }
    }

    public function error($error){
            if(!is_null($error)) {
                    print_r($error);
                } else {
                    // echo 'Consulta Exitosa';
                }
        }
}

?>