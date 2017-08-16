
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
