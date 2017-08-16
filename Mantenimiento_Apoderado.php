

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
	$query="SELECT idApoderado,nomApoderado,apeApoderado,traApoderado,dniApoderado,celApoderado FROM apoderado";
	$resultado=$mysqli->query($query);
	?>
	<center> <h3>Realizar mantenimineto  datos Apoderado</h3></center>
	 <a href="InsertarApoderado.php"><input class="btn_insertar" type="submit" value="Insertar"/></a>
	<p></p>
	  <table width="100%" align="center" class="table table-hover ">
        <thead>
		 <tr>
       		<td class="cabecera">ID</td>
          <td class="cabecera">NOMBRE</td>
           <td class="cabecera">APELLIDOS</td>
           <td class="cabecera">OCUPACION</td>
           <td class="cabecera">DNI</td>
           <td class="cabecera">TELEFONO</td>
           <td colspan="2" class="cabecera acciones">Acciones</td>
          </tr>
        </thead>
        <tbody>
          <?php while($row=$resultado->fetch_assoc()){?>
          <tr> </tr>
          <td><?php echo $row['idApoderado'];?></td>
            <td><?php echo $row['nomApoderado'];?></td>
            <td><?php echo $row['apeApoderado'];?></td>
            <td><?php echo $row['traApoderado'];?></td>
            <td><?php echo $row['dniApoderado'];?></td>
            <td><?php echo $row['celApoderado'];?></td>
			      <td ><a  class="modificar" href="modificarDatosApoderado.php?id=<?php echo $row['idApoderado'];?>" class="enlaceboton">Modificar</a></td>
	         <td><a  class="eliminar" href="EliminarApoderado.php?id=<?php echo $row['idApoderado'];?>" class="enlaceboton1">Eliminar</a></td>
          </tr>
        </tbody>

        <?php } ?>
    </table>
</body>

	 </table>
