




<?php
error_reporting(0);
session_start();
// $usuario=$_SESSION['Username'];
//
// if($usuario !=""){
// //$v=md5("BIENVENIDO");
// header("Location:a_principal.php");
// }

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADVentas | www.incanatoit.com</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="blue.css">
    <link rel="stylesheet" href="css2/estilos.css">
  </head>
  <body >



    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
<div class="main">


    <div class="container">
<center>
<div class="middle">
      <div id="login">

        <form action="a_doLogin.php" method="POST">

          <fieldset class="clearfix">

            <p ><span class="fa fa-user"></span>
              <input type="text"   name="usu" Placeholder="Username" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fa fa-lock"></span>
              <input type="password"   name="contra"  Placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->

             <div>
          <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#">Llamar al Administrador...</a></span>
          <span style="width:50%; text-align:right;  display: inline-block;">
              <input type="submit"  name="btn_login" value="Entrar"></span>
          </div>

          </fieldset>
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <div class="logo"><img src="img/jch.png" width="130px" alt="">

          <div class="clearfix"></div>
      </div>

      </div>
</center>
    </div>

</div>

    <!-- jQuery 2.1.4 -->
    <script src="js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
