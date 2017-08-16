

<html>
<head>
<title>LISTAR ALUMNO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- <link rel="stylesheet" href="ccs/mm_health_nutr.css"/> -->
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
<style type="text/css">

</style>
</head>
<body bgcolor="#F4FFE4">
	<?php
	require('a_conexion2.php');
	$query="SELECT idlogin,usuario,contrasena FROM login";
	$resultado=$mysqli->query($query);
	?>
	<center> <h3>MANTENIMINETO LOGIN</h3></center>
	 <a href="InsertarLogin.php"><input class="btn_insertar" type="submit" value="Insertar"/></a>
	<p></p>
	  <table width="100%" align="center" class="table table-hover ">
        <thead>
		 <tr>
       		<td class="cabecera">ID</td>
          <td class="cabecera">USUARIO</td>
           <td class="cabecera">CONTRASEÑA</td>
           <td colspan="2" class="cabecera acciones">Acciones</td>
          </tr>
        </thead>
        <tbody>
          <?php while($row=$resultado->fetch_assoc()){?>
          <tr> </tr>
          <td><?php echo $row['idlogin'];?></td>
            <td><?php echo $row['usuario'];?></td>
            <td><?php echo $row['contrasena'];?></td>
			      <td ><a href="modificarDatosLogin.php?id=<?php echo $row['idlogin'];?>" class="enlaceboton">Modificar</a></td>
	         <td><a href="EliminarLogin.php?id=<?php echo $row['idlogin'];?>" class="enlaceboton1">Eliminar</a></td>
          </tr>
        </tbody>

        <?php } ?>
    </table>
</body>

	 </table>
