
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

                              //LLENAR ALUMNO
                              include 'a_conexion2.php';
                                  $sql="SELECT * from alumno";
                                  $result = $mysqli->query($sql); //usamos la conexion para dar un resultado a la variable
                                  if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                                  {
                                      $ComboAlumno="";
                                      while ($row = $result->fetch_array(MYSQLI_ASSOC))
                                      {
                                          $ComboAlumno .=" <option value='".$row['idAlumno']."'>".$row['nomAlumno']." ".$row['apeAlumno']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                      }
                                  }
                                  else
                                  {
                                      echo "No hubo resultados";
                                  }

                                  //COMBO GRADO
                                  $sql="SELECT * from grado";
                                  $result = $mysqli->query($sql); //usamos la conexion para dar un resultado a la variable
                                  if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                                  {
                                      $ComboGrado="";
                                      while ($row = $result->fetch_array(MYSQLI_ASSOC))
                                      {
                                          $ComboGrado .=" <option value='".$row['idGrado']."'>".$row['secGrado']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                      }
                                  }
                                  else
                                  {
                                      echo "No hubo resultados";
                                  }

                                  //COMBO SECCION
                                  $sql="SELECT * from seccion";
                                  $result = $mysqli->query($sql); //usamos la conexion para dar un resultado a la variable
                                  if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                                  {
                                      $ComboSeccion="";
                                      while ($row = $result->fetch_array(MYSQLI_ASSOC))
                                      {
                                          $ComboSeccion .=" <option value='".$row['idSeccion']."'>".$row['descSeccion']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                      }
                                  }
                                  else
                                  {
                                      echo "No hubo resultados";
                                  }


                                  //COMBO SECCION
                                  $sql="SELECT * from carrera";
                                  $result = $mysqli->query($sql); //usamos la conexion para dar un resultado a la variable
                                  if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                                  {
                                      $ComboCarrera="";
                                      while ($row = $result->fetch_array(MYSQLI_ASSOC))
                                      {
                                          $ComboCarrera .=" <option value='".$row['idCarrera']."'>".$row['descCarrera']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                      }
                                  }
                                  else
                                  {
                                      echo "No hubo resultados";
                                  }

                                  //COMBO EMPLEADO
                                  $sql="SELECT * from empleado";
                                  $result = $mysqli->query($sql); //usamos la conexion para dar un resultado a la variable
                                  if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
                                  {
                                      $ComboEmpleado="";
                                      while ($row = $result->fetch_array(MYSQLI_ASSOC))
                                      {
                                          $ComboEmpleado.=" <option value='".$row['idEmpleado']."'>".$row['nomEnmpleado']."  ".$row['apeEmpleado']."****".$row['dniEmpleado']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
                                      }
                                  }
                                  else
                                  {
                                      echo "No hubo resultados";
                                  }


                                  //CONSULTA APODERADO


                              ?>
                             															<center><h2>.:: Mariculando Alumno(a)::.</h2></center>
                             <!-- INICIO     --------------FORMULARIO DE REGISTRO ------------------------------------------------------------------>
                             <form name="modifica" method="POST" action="b_InsertarDatosMatricula.php" >




                                 <hr class="hr-primary" />
                                 <h4>DATOS DEL APODERADO</h4>
                                 <hr class="hr-primary" />
                               <div class="row">
                                 <input type="hidden"name="id"value="">
                                 <div class="col-md-3"><b>CODIGO APODERADO:</b></div>
                                <div class="col-md-7"><input class="no_edit" type="txt" name="codigoApo" size="25"value="" disabled /></div>
                              </div>
                              <br>
                              <div class="row">
                                <div class="col-md-2"><b>NOMBRE:</b></div>
                                <div class="col-md-3"><input  type="txt" name="nombreApo" size="25"value=""/></div>
                                <div class="col-md-2"><b>APELLIDO:</b></div>
                                <div class="col-md-5"><input  type="txt"name="apellidoApo"size="25" value="" /></div>
                             </div>
                             <br>
                             <div class="row">
                               <div class="col-md-2"><b>OCUPACION:</b></div>
                               <div class="col-md-3"><input type="txt" name="ocupacionApo" size="25"value=""/></div>
                               <div class="col-md-2"><b>DNI:</b></div>
                               <div class="col-md-5"><input  type="txt"name="dniApo"size="25" value="" /></div>
                            </div>
                             <br>
                            <div class="row">
                              <div class="col-md-2"><b>NUM CELULAR:</b></div>
                              <div class="col-md-3"><input  type="txt" name="celApo" size="25"value=""/></div>
                              <div class="col-md-2"><b>DIRECCION:</b></div>
                              <div class="col-md-5"><input ctype="txt"name="dirApo"size="25" value="" /></div>
                           </div>
                          <!-- DATOS ALUMNO -->
                           <hr class="hr-primary" />
                           <h4>DATOS DEL ALUMNO(A)</h4>
                           <hr class="hr-primary" />

                           <div class="row">
                             <div class="col-md-2"><b>NOMBRE:</b></div>
                             <div class="col-md-3"><input  type="txt" name="nombreAlu" size="25"value=""/></div>
                             <div class="col-md-2"><b>APELLIDOS:</b></div>
                             <div class="col-md-5"><input type="txt"name="apellidoAlu"size="25" value="" /></div>
                          </div>
                           <br>
                          <div class="row">
                            <div class="col-md-2"><b>DIRECCION:</b></div>
                            <div class="col-md-3"><input  type="txt" name="dirAlu" size="25"value=""/></div>
                            <div class="col-md-2"><b>TELEFONO:</b></div>
                            <div class="col-md-5"><input type="txt"name="telAlu"size="25" value="" /></div>
                         </div>
                          <br>
                         <div class="row">
                           <div class="col-md-2"><b>DNI:</b></div>
                           <div class="col-md-3"><input  type="txt" name="dniAlu" size="25"value=""/></div>
                           <div class="col-md-2"><b>FECHA NACIMIENTO:</b></div>
                           <div class="col-md-5"><input type="txt"name="fecNacAlu"size="25" value="" /></div>
                        </div>
                         <br>
                        <div class="row">
                          <div class="col-md-2"><b>GENERO:</b></div>
                          <div class="col-md-3"><input  type="txt" name="genAlu" size="25"value=""/></div>
                          <div class="col-md-2"><b>CORREO/E_MAIL:</b></div>
                          <div class="col-md-5"><input type="txt"name="correoAlu"size="25" value="" /></div>
                       </div>



                       <!-- DATOS CARRERA ---- MATRICULAS -->
                        <hr class="hr-primary" />
                        <h4>DATOS DE LA CARRERA</h4>
                        <hr class="hr-primary" />



                        <div class="row">
                          <div class="col-md-2"><b>FECHA:</b></div>
                          <div class="col-md-3"><input type="date"name="fechaMat"size="25" value="" /></div>
                          <div class="col-md-2"><b>HORA:</b></div>
                          <div class="col-md-5"><input type="time" name="horaMat"size="25" value="" /></div>
                       </div>
                        <br>
                        <div class="row">
                          <div class="col-md-2"><b>CARRERA::</b></div>
                          <div class="col-md-3">
                            <select  name="carreraMat">
                              <?php echo $ComboCarrera; ?>
                            </select>
                          </div>
                          <div class="col-md-2"><b>NIVEL MATRICULA:</b></div>
                          <div class="col-md-5"><input type="txt" name="nivelMat"size="25" value="" /></div>
                       </div>
                        <br>
                        <div class="row">
                          <div class="col-md-2"><b>GRADO:</b></div>
                          <div class="col-md-3">
                            <select  name="gradoMat">
                              <?php echo $ComboGrado; ?>
                            </select>
                          </div>
                          <div class="col-md-2"><b>SECCION:</b></div>
                          <div class="col-md-5">
                            <select  name="seccionMat">
                              <?php echo $ComboSeccion; ?>
                            </select>
                          </div>
                       </div>
                       <br>
                       <div class="row">
                         <div class="col-md-2"><b>COSTO MATRICULA:</b></div>
                         <div class="col-md-3"><input type="txt"name="costoMat"size="25" value="" /></div>
                         <div class="col-md-2"><b>OBSERVACION:</b></div>
                         <div class="col-md-3"> <textarea class="form-control" name="obsMat" rows="3"></textarea></div>
                         
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-2"><b>EMPLEADO:</b></div>
                        <div class="col-md-6">
                          <select  name="empleMat">
                            <?php echo $ComboEmpleado; ?>
                          </select>
                        </div>

                     </div>

                          <hr class="hr-primary" />
                  		 <tr>
                  		 <td height="48" colspan="2"><center><input class="boton" type="submit" name="guardar" value="Guardar"/></center></td>
                  		 </tr>
                           <hr class="hr-primary" />

                  		</form>
                             		<!-- FIN    -----------------FORMULARIO DE REGISTRO ------------------------------------------------------------------>







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






























 <?php

 //LLENAR ALUMNO
 include 'a_conexion2.php';
     $sql="SELECT * from alumno";
     $result = $mysqli->query($sql); //usamos la conexion para dar un resultado a la variable
     if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
     {
         $ComboAlumno="";
         while ($row = $result->fetch_array(MYSQLI_ASSOC))
         {
             $ComboAlumno .=" <option value='".$row['idAlumno']."'>".$row['nomAlumno']." ".$row['apeAlumno']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
         }
     }
     else
     {
         echo "No hubo resultados";
     }

     //COMBO GRADO
     $sql="SELECT * from grado";
     $result = $mysqli->query($sql); //usamos la conexion para dar un resultado a la variable
     if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
     {
         $ComboGrado="";
         while ($row = $result->fetch_array(MYSQLI_ASSOC))
         {
             $ComboGrado .=" <option value='".$row['idGrado']."'>".$row['secGrado']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
         }
     }
     else
     {
         echo "No hubo resultados";
     }

     //COMBO SECCION
     $sql="SELECT * from seccion";
     $result = $mysqli->query($sql); //usamos la conexion para dar un resultado a la variable
     if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
     {
         $ComboSeccion="";
         while ($row = $result->fetch_array(MYSQLI_ASSOC))
         {
             $ComboSeccion .=" <option value='".$row['idSeccion']."'>".$row['descSeccion']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
         }
     }
     else
     {
         echo "No hubo resultados";
     }


     //COMBO SECCION
     $sql="SELECT * from carrera";
     $result = $mysqli->query($sql); //usamos la conexion para dar un resultado a la variable
     if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
     {
         $ComboCarrera="";
         while ($row = $result->fetch_array(MYSQLI_ASSOC))
         {
             $ComboCarrera .=" <option value='".$row['idCarrera']."'>".$row['descCarrera']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
         }
     }
     else
     {
         echo "No hubo resultados";
     }










 ?>
															<center><h2>.::Registrarse::.</h2></center>
<!-- INICIO     --------------FORMULARIO DE REGISTRO ------------------------------------------------------------------>
<form name="modifica" method="POST" action="b_InsertarDatosMatricula.php" >
		<table align="center">

      <tr>
           <td height="60"><b>ALUMNO:</b></td>
           <td>
             <select  name="apoderado">
               <?php echo $ComboAlumno; ?>
             </select>
           </td>
      </tr>
		<tr>
			 <td height="52"><b>GRADO:</b></td>
			 <td><input type="txt"name="apellido"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
		 </tr>
     <tr>
 			 <td height="52"><b>FECHA MATRICULA:</b></td>
 			 <td><input type="txt"name="nombre"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
 		 </tr>
     <tr>
 			 <td height="52"><b>HORA:</b></td>
 			 <td><input type="txt"name="direccion"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
 		 </tr>
     <tr>
        <td height="52"><b>COSTO MATRICULA:</b></td>
        <td><input type="txt"name="telefono"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
      </tr>
      <tr>
        <td height="52"><b>NVEL MATRICULA:</b></td>
        <td><input type="txt"name="dni"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
      </tr>
      <tr>
        <td height="52"><b>ID EMPLEADO</b></td>
        <td><input type="date"name="fnacimiento"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
      </tr>
      <tr>

           <td height="52"><b>GRADO:</b>
             <select class="selectpicker" name="grado">
               <?php echo $ComboGrado; ?>
             </select>
           </td>

           <td height="52">
             <b>SECCION:</b>
             <select  name="seccion" class="selectpicker" data-live-search="true">
               <?php echo $ComboSeccion; ?>
             </select>
           </td>
      </tr>

      <tr>
        <td height="52"><b>ID CARRERA</b></td>
        <td><input type="txt"name="email"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
      </tr>
	 <tr>
		 <tr>
		 <td height="48" colspan="2"><center><input class="boton" type="submit" name="guardar" value="Guardar"/></center></td>
		 </tr>
		</table>
		</form>
		<!-- FIN    -----------------FORMULARIO DE REGISTRO ------------------------------------------------------------------>
						<?php
							//LISTAR - - - - - - - -
							if(isset($_GET["code"]) && $_GET["code"]==md5('ListarEmpleado')){
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
