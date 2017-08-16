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
                               require('a_conexion2.php');
                               $id=$_GET['id'];

                               $query="SELECT idlogin,usuario,contrasena,codigo,idAlumno FROM login WHERE idlogin ='$id'";
                               $resultado=$mysqli->query($query);
                               $row=$resultado->fetch_assoc();

                               ?>
                                 <center><h3>MODIFICAR DATOS LOGIN</h3></center>
<!-- INICIO    -----------------FORMULARIO DE REGISTRO ------------------------------------------------------------------>
<form name="modifica" method="POST" action="modificaLogin.php">
    <table align="center">
      <tr>
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <td width="138" height="49"><b>ID</b></td>
        <td width="361"><input class="no_edit" type="txt"name="id"size="25" value="<?php echo $row['idlogin'];?>" disabled/></td>
     </tr>
      <tr>
        <td height="49"><b>usuario</b></td>
        <td><input type="txt"name="usuario"size="25"value="<?php echo $row['usuario'];?>" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
      </tr>
      <tr>
        <td height="60"><b>contrasena</b></div></td>
     <td><input type="txt"name="contrasena"size="25"value="<?php echo $row['contrasena'];?>" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
      </tr>
    <tr>
       <td height="52"><b>codigo</b></td>
       <td><input type="txt"name="codigo"size="25"value="<?php echo $row['codigo'];?>" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
     </tr>
     <tr>
       <td height="52"><b>alumno</b></td>
       <td><input type="txt"name="alumno"size="25"value="<?php echo $row['idAlumno'];?>" /></td>
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
