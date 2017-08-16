<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sesion</title>
  </head>
  <body>
      <?php
        session_start();
        session_destroy();

        if(isset($_SESSION['u_usuario'])){
          echo "Sesion Exitosa \n Bienvenido";
        }else {
          header("location :index.php");
        }

       ?>
  </body>
</html>
