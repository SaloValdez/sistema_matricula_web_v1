

<html>
<head>
<title>LISTAR ALUMNO</title>
<meta charset="utf-8" />
<html lang="es">
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
	$query="SELECT idCarrera,descCarrera  FROM carrera";
	$resultado=$mysqli->query($query);
	?>
	<center> <h3>Realizar mantenimineto  Carrera</h3></center>
	 <a href="InsertarCarrera.php"><input class="btn_insertar" type="submit" value="Insertar"/></a>
	<p></p>

	<div class="col-md-15" style="overflow-x: auto">
	  <table width="100%" align="center"     class="table table-hover  ">
        <thead>
		 <tr>
       		 <td class="cabecera">ID</td>
				   <td class="cabecera">NOMBRE CARRERA</td>

           <td colspan="2" class="cabecera acciones">Acciones</td>
          </tr>
        </thead>
        <tbody>
          <?php while($row=$resultado->fetch_assoc()){?>
          <tr> </tr>
          <td><?php echo $row['idCarrera'];?></td>
					<td><?php echo $row['descCarrera'];?></td>
			      <td ><a  class="modificar" href="modificarDatosCarrera.php?id=<?php echo $row['idCarrera'];?>" class="enlaceboton">Modificar</a></td>
	         <td><a  class="eliminar" href="EliminarCarrera.php?id=<?php echo $row['idCarrera'];?>" class="enlaceboton1">Eliminar</a></td>
          </tr>
        </tbody>

        <?php } ?>
    </table>
	</div>
</body>
</table>
