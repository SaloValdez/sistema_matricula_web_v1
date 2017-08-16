<?php
// sleep(3.7);
session_start();
include 'a_conexion.php';

$usuarioActivo = $_SESSION['user']; //para mostrar en la pagina()
$usuarioNumbre = $_SESSION['nombre'];
$usuarioApellido = $_SESSION['apellido'];
$usuarioEmail= $_SESSION['email'];
$usuarioDni = $_SESSION['dni'];
$usuarioNacimiento = $_SESSION['nacimiento'];
$usuarioTelefono = $_SESSION['telefono'];
if(!isset($_SESSION['user'])) {
    echo '<script> window.location="index.php"; </script>';
}
   include("a_menu.php");
?>
       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sistema de Ventas</h3>

                   <br>

                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
 <!-----------------------------------Contenido -------------------------------------------------------->


                              <?php
                              if(isset($_GET["code"]) && $_GET["code"]==md5('login')){
                                $mensaje = "Hola";
                                include("listar_login.php");
                              }


                              //MatricularNuevo
                              if(isset($_GET["code"]) && $_GET["code"]==md5('MatricularNuevo')){
                                $mensaje = "Hola";
                                include("b_busqueda.html");

                              }

                                //LISTAR - - - - - - - -
                                if(isset($_GET["code"]) && $_GET["code"]==md5('ListarEmpleado')){
                                  $mensaje = "Hola";
                                  include("listar_login2.php");
                                }

                                //REGISTRAR - - - - - - - - - - -
                                if(isset($_GET["code"]) && $_GET["code"]==md5('RegistrarEmpleado')){
                                  include('Registrar_F_Empleado.php');
                                }
                                //MODFIFICAR - - - - - -
                                if(isset($_GET["code"]) && $_GET["code"]==md5('ModificarEmpleado')){
                                  include('Listar_Empleado.php');
                                }

                                //ANTENIMIENTO - - - - - -
                                if(isset($_GET["code"]) && $_GET["code"]==md5('MantenimientoAlumno')){
                                  include('Mantenimiento_Alumno.php');
                                }
                                  if(isset($_GET["code"]) && $_GET["code"]==md5('MantenimientoEmpleado')){
                                  include('listar_login2.php');
                                }
                                if(isset($_GET["code"]) && $_GET["code"]==md5('MantenimientoApoderado')){
                                  include('Mantenimiento_Apoderado.php');
                                }
                                if(isset($_GET["code"]) && $_GET["code"]==md5('MantenimientoCarrera')){
                                  include('Mantenimiento_Carrera.php');
                                }

                                //REPORTE
                                  //ALUYMNO
                                  if(isset($_GET["code"]) && $_GET["code"]==md5('ReporteEmpleado')){
                                    include('Reporte_Alumno.php');
                                  }


                               ?>
		                          <!--Fin Contenido-->
                           </div>
                        </div>

                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 0.0.1
        </div>
        <strong>Copyright &copy; 2017 <a href="#">Salomon Valdez</a>.</strong>
Todos los derechos reservados.
      </footer>


    <!-- jQuery 2.1.4 -->
    <script src="js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/app.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/main.js"></script>

  </body>
</html>
