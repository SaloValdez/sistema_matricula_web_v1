<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sis Matricula | www.salomonvaldez.com</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 jojojojojojojojojojojojoj-->

    <link rel="stylesheet" href="css2/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="css/_all-skins.min.css">
      <!-- <link rel="stylesheet" href="css/estilos_propios.css"> -->

    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- SCRIPTS JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="b_peticion.js"></script>


    <script type="text/javascript">
      jQuery('iframe').iframeAutoHeight();
    </script>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">


    <?php
      $codigo       = 'code';
      //matricular
        $MatricularNuevo= md5("MatricularNuevo");
        $ListarMatricula= md5("ListarMatricula");

      $login= md5("login");
      //listar -  - - - - - - - - - - - - - - - - - - - - -
      $ListarEmpleado= md5("ListarEmpleado");
      $ListarApoderado= md5("ListarApoderado");
      //Registrar - - - - - - - - - - - - - - - - - -
      $RegistrarEmpleado = md5("RegistrarEmpleado");
      //modificar - - - - - - - - - - - - - - - - -  - -- - -
      $ModificarEmpleado = md5("ModificarEmpleado");

      //Mantenimiento
        $MantenimientoEmpleado= md5("MantenimientoEmpleado");
        $MantenimientoApoderado=md5("MantenimientoApoderado");
        $MantenimientoAlumno=md5("MantenimientoAlumno");
        $MantenimientoCarrera=md5("MantenimientoCarrera");




    //reporte
        $ReporteAlumno=  md5("ReporteAlumno");

    ?>



    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="a_principal.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>AD</b>V</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>I.J.CH</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="en-linea">En Linea</small>
                  <span class="hidden-xs"> <?php

                     echo  " &nbsp;&nbsp;&nbsp;".$usuarioNumbre. "&nbsp". $usuarioApellido;





                     $usuarioActivo = $_SESSION['user']; //para mostrar en la pagina()
                     $usuarioNumbre = $_SESSION['nombre'];
                     $usuarioApellido = $_SESSION['apellido'];
                     $usuarioEmail= $_SESSION['email'];
                     $usuarioDni = $_SESSION['dni'];
                     $usuarioNacimiento = $_SESSION['nacimiento'];
                     $usuarioTelefono = $_SESSION['telefono'];
                    ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">

                    <p>
                    <p><b>Correo: </b><?php   echo $usuarioEmail; ?></p>
                    <p><b>Dni: </b><?php   echo $usuarioDni; ?></p>
                    <p><b>Fecha Nacimiento: </b><?php   echo $usuarioNacimiento; ?></p>
                    <p><b>Telefono: </b><?php   echo $usuarioTelefono; ?></p>

                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="a_cerrar_session.php" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-institution"></i>
                <span>Institucional</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Mision</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Vision</a></li>
              </ul>
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-pencil-square"></i>
                <span>Matricular</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="a_principal.php?<?php echo $codigo; ?>=<?php echo $MatricularNuevo; ?>"> <span>MATRICULAR NUEVO <p class="label pull-left bg-red">Nuevo</p></span>     </a></li>
                <li><a href="a_principal.php?<?php echo $codigo; ?>=<?php echo $ListarMatricula; ?>"><i class="fa fa-circle-o"></i> Listar Matricula</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Actualizar Matricula</a></li>




              </ul>
            </li>





            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Empeado</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Buscar</a></li>
                <li><a href="a_principal.php?<?php echo $codigo; ?>=<?php echo $RegistrarEmpleado; ?>"><i class="fa fa-circle-o"></i> Registrar</a></li>

                <li><a href="a_principal.php?<?php echo $codigo; ?>=<?php echo $ListarEmpleado; ?>"><i class="fa fa-circle-o"></i>Listar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Alumnos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Buscar</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Registrar</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Listar</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-male"></i> <span>Apoderado</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Buscar</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Listar</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Registrar</a></li>

              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i "fa fa-address"></i> <span>Reportes<p class="label pull-left bg-red">PDF</p></span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="Reporte_Alumno.php" target="_blank"><i class="fa fa-circle-o"></i>Reporte Alumno</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Reporte Apoderado</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Reporte Empleados</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Reporte Matricula</a></li>

              </ul>
            </li>



            <li class="treeview">
              <a href="#">
                <i class="fa fa-wrench"></i> <span>Mantenimiento</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="a_principal.php?<?php echo $codigo; ?>=<?php echo $MantenimientoAlumno; ?>"><i class="fa fa-circle-o"></i> Alumno</a></li>
                <li><a href="a_principal.php?<?php echo $codigo; ?>=<?php echo $MantenimientoEmpleado; ?>"><i class="fa fa-circle-o"></i>login</a></li>
                <li><a href="a_principal.php?<?php echo $codigo; ?>=<?php echo $MantenimientoApoderado; ?>"><i class="fa fa-circle-o"></i> Apoderado</a></li>
                  <li><a href="a_principal.php?<?php echo $codigo; ?>=<?php echo $MantenimientoCarrera; ?>"><i class="fa fa-circle-o"></i>Carrera</a></li>
              </ul>
            </li>





             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>

              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
