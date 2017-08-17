<?php
// sleep(3.7);
session_start();
include 'a_conexion.php';
$usuarioActivo = $_SESSION['user']; //para mostrar en la pagina()

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
		                          <!--Contenido-->
                              <?php
                            	require('a_conexion2.php');
                            	$query="SELECT idMatricula,idAlumno,idGrado,fecMatricula,horMatricula,costMatricula,nivelMatricula,idEmpleado,idSeccion,idCarrera  FROM matricula";
                            	$resultado=$mysqli->query($query);
                            	?>
                            	<center> <h3>Matricula</h3></center>
                            	 <a href="#"><input class="btn_insertar" type="submit" value="Insertar"/></a>
                            	<p></p>

                            	<div class="col-md-15" style="overflow-x: auto">
                            	  <table width="100%" align="center"     class="table table-hover  ">
                                    <thead>
                            		 <tr>
                                   		 <td class="cabecera">ID</td>
                            				   <td class="cabecera">ID ALUMNO</td>
                            					 <td class="cabecera">ID GRADO</td>
                                       <td class="cabecera">FECHA</td>
                                       <td class="cabecera">HORA</td>
                                       <td class="cabecera">COSTO</td>
                                       <td class="cabecera">NIVEL</td>
                            					 <td class="cabecera">ID EMPLEADO</td>
                            					 <td class="cabecera">SECCION</td>
                            					 <td class="cabecera">CARRERA</td>

                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php while($row=$resultado->fetch_assoc()){?>
                                      <tr> </tr>
                                      <td><?php echo $row['idMatricula'];?></td>
                            					<td><?php echo $row['idAlumno'];?></td>
                                        <td><?php echo $row['idGrado'];?></td>
                                        <td><?php echo $row['fecMatricula'];?></td>
                                        <td><?php echo $row['horMatricula'];?></td>
                                        <td><?php echo $row['costMatricula'];?></td>
                            						<td><?php echo $row['nivelMatricula'];?></td>
                            						<td><?php echo $row['idEmpleado'];?></td>
                            						<td><?php echo $row['idSeccion'];?></td>
                            						<td><?php echo $row['idCarrera'];?></td>
                                      </tr>
                                    </tbody>

                                    <?php } ?>
                                </table>
                            	</div>


                              <?php
                              if(isset($_GET["code"]) && $_GET["code"]==md5('login')){
                                $mensaje = "Hola";
                                include("listar_login.php");
                              }


                                //LISTAR - - - - - - - -
                                if(isset($_GET["code"]) && $_GET["code"]==md5('ListarEmpleado')){
                                  $mensaje = "Hola";
                                  include("Listar_Empleado.php");
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
                                if(isset($_GET["code"]) && $_GET["code"]==md5('MantenimientoEmpleado')){
                                  include('Listar_Empleado.php');
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

  </body>
</html>
