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
                   <h3 class="box-title">Sistema de Matricula</h3>

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


//LLENAR COMBO
include 'a_conexion2.php';
$sql="SELECT * from apoderado";
$result = $mysqli->query($sql); //usamos la conexion para dar un resultado a la variable

if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{
    $ComboApoderado="";
    while ($row = $result->fetch_array(MYSQLI_ASSOC))
    {
        $ComboApoderado .=" <option value='".$row['idApoderado']."'>".$row['nomApoderado']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    }
}
else
{
    echo "No hubo resultados";
}
?>
<?php
$id=$_GET['id'];
$query="SELECT idAlumno,idApoderado,apeAlumno,nomAlumno,dirAlumno,telAlumno,dniAlumno,fnaAlumno,sexAlumno,emailAlumno FROM alumno WHERE idAlumno='$id'";
$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();
?>
<html>
<head>
<title>MODIFICAR ALUMNO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style type="text/css">
</style>

</head>
<body>

  <center><h1>MODIFICAR DATOS ALUMNO</h1></center>

<form name="modifica" method="POST" action="ModificaAlumno.php">
               <table align="center">
                 <tr>
            	 <input type="hidden"name="id"value="<?php echo $id; ?>">

                   <td width="138" height="49"><b>CODIGO:</b></td>
                   <td width="361"><input class="no_edit"  type="txt" name="codigo" size="25"value="<?php echo $row['idAlumno'];?> " disabled/></td>
            	   </tr>
                 <tr>
                      <td height="60"><b>APODERADO:</b></td>
                      <td>
                        <select  name="apoderado">
                          <?php echo $ComboApoderado; ?>
                        </select>
                      </td>
                 </tr>
                 <tr>
                   <td height="60"><b>APELLIDO</b></td>
                   <td><input type="txt"name="apellido"size="25"value="<?php echo $row['apeAlumno'];?>" /></td>
                 </tr>
            	  <tr>
                  <td height="52"><b>NOMBRE.</b></td>
                  <td><input type="txt"name="nombre"size="25"value="<?php echo $row['nomAlumno'];?>" /></td>
                </tr>
                <tr>
                  <td height="52"><b>DIRECCION:</b></td>
                  <td><input type="txt"name="direccion"size="25"value="<?php echo $row['dirAlumno'];?>" /></td>
                </tr>
                <tr>
                  <td height="52"><b>TELEFONO</b></td>
                  <td><input type="txt"name="telefono"size="25"value="<?php echo $row['telAlumno'];?>" /></td>
                </tr>
                <tr>
                  <td height="52"><b>DNI</b></td>
                  <td><input type="txt"name="dni"size="25"value="<?php echo $row['dniAlumno'];?>" /></td>
                </tr>
                <tr>
                  <td height="52"><b>FECHA NAC.</b></td>
                  <td><input type="txt"name="fecha"size="25"value="<?php echo $row['fnaAlumno'];?>" /></td>
                </tr>
                <tr>
                  <td height="52"><b>GENERO</b></td>
                  <td><input type="txt"name="genero"size="25"value="<?php echo $row['sexAlumno'];?>" /></td>
                </tr>
                <tr>
                  <td height="52"><b>EMAIL</b></td>
                  <td><input type="txt"name="email"size="25"value="<?php echo $row['emailAlumno'];?>" /></td>
                </tr>
                <tr>
                  <tr>
                  <td height="48" colspan="2"><center><input class="boton" type="submit" name="guardar" value="Guardar"/></center></td>
                </tr>
               </table>
<center>

</center>
</form>


















<!-- FIN    -----------------FORMULARIO DE REGISTRO ------------------------------------------------------------------>


                               <?php
                                 //LISTAR - - - - - - - -
                                 if(isset($_GET["code"]) && $_GET["code"]==md5('ListarEmpleado')){
                                   include('Listar_Empleado.php');
                                 }


                                 //ANTENIMIENTO - - - - - -
                                 if(isset($_GET["code"]) && $_GET["code"]==md5('MantenimientoEmpleado')){
                                   include('listar_login2.php');
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
