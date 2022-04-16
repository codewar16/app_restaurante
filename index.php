<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SOTSFER ENTERPRISE</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <img src="img/LOGO_SIMPLIFICADO2.png" alt="" name="logo_app" id="logo_app">
        <!--<h3 style="font-family:Arial, Helvetica, sans-serif; font-weight: 600;">SOTSFER ENTERPRISE</h3> -->
      </div>
      <div class="login-box">


        <form class="login-form" role="form" action="sesion/entrar2.php" method="POST">
          <h3 class="login-head">INICIO DE SESIÓN<i class="fa fa-lg fa-fw fa-user"></i></h3>
          <div class="form-group">
            <label class="control-label">USUARIO</label>
            <input class="form-control" name="usuario" required type="text" placeholder="Usuario" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">CONTRASEÑA </label> <a class="btn btn_eye" onclick="mostrarContrasena()" href="#"><i class="fa fa-eye"></i></a>
             <input class="form-control" required name="contrasena" type="password" id="password" placeholder="Contraseña"> 
              <!-- <button class="btn btn_eye" type="button" onclick="mostrarContrasena()"><i class="fa fa-eye"></i></button> -->
         
            <!-- <a class="btn btn-primary" onclick="mostrarContrasena()" href="#"><i class="fa fa-eye"></i></a> -->
          </div>
                  <!-- <div class="form-group"> -->
                    <!-- <div class="utility"> -->
                      <!-- <div class="animated-checkbox">
                        <label>
                          <input type="checkbox"><span class="label-text">Stay Signed in</span>
                        </label>
                      </div> -->
                      <!-- <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Olvidó su contraseña ?</a></p> -->
                      <!-- <button class="btn btn_eye" type="button" onclick="mostrarContrasena()"><i class="fa fa-eye"></i></button> -->
                    <!-- </div> -->
                  <!-- </div> -->
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i> ACCEDER <i class="fa fa-sign-in fa-lg fa-fw"></i></button>
            <!-- <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>ACCEDER</button> -->
          </div>
        </form>




        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Recuperación</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>ENVIAR</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Regresar</a></p>
          </div>
        </form>
      </div>
      
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
    <script>
        function mostrarContrasena(){
            var tipo = document.getElementById("password");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }
      </script>
  </body>
</html>