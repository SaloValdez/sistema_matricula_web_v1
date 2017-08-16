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

                               $query="SELECT idApoderado,nomApoderado,apeApoderado,traApoderado,dniApoderado,celApoderado FROM apoderado WHERE idApoderado ='$id'";
                               $resultado=$mysqli->query($query);
                               $row=$resultado->fetch_assoc();

                               ?>
                                 <center><h3>MODIFICAR DATOS DEL APODERADO</h3></center>
<!-- INICIO    -----------------FORMULARIO DE REGISTRO ------------------------------------------------------------------>
<form name="modifica" method="POST" action="modificaApoderado.php">
    <table align="center">
      <tr>
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <td width="138" height="49"><b>ID</b></td>
        <td width="361"><input class="no_edit" type="txt"name="id"size="25" value="<?php echo $row['idApoderado'];?>" disabled/></td>
     </tr>
      <tr>
        <td height="49"><b>Nombre:</b></td>
        <td><input type="txt"name="nombre"size="25"value="<?php echo $row['nomApoderado'];?>" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
      </tr>
      <tr>
        <td height="60"><b>Apellido</b></div></td>
     <td><input type="txt"name="apellido"size="25"value="<?php echo $row['apeApoderado'];?>" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
      </tr>
    <tr>
       <td height="52"><b>Ocupacion</b></td>
       <td><input type="txt"name="ocupacion"size="25"value="<?php echo $row['traApoderado'];?>" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
     </tr>
     <tr>
       <td height="52"><b>Dni:</b></td>
       <td><input type="txt"name="dni"size="25"value="<?php echo $row['dniApoderado'];?>" /></td>
   </tr>
   <tr>
     <td height="52"><b>Telefono:</b></td>
     <td><input type="txt"name="telefono"size="25"value="<?php echo $row['celApoderado'];?>" /></td>
 </tr>
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
