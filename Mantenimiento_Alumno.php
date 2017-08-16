

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
	$query="SELECT idAlumno,idApoderado,apeAlumno,nomAlumno,dirAlumno,telAlumno,dniAlumno,fnaAlumno,sexAlumno,emailAlumno  FROM alumno";
	$resultado=$mysqli->query($query);
	?>
	<center> <h3>Realizar mantenimineto   Alumno</h3></center>
	 <a href="InsertarAlumno.php"><input class="btn_insertar" type="submit" value="Insertar"/></a>
	<p></p>

	<div class="col-md-15" style="overflow-x: auto">
	  <table width="100%" align="center"     class="table table-hover  ">
        <thead>
		 <tr>
       		 <td class="cabecera">ID</td>
				   <td class="cabecera">ID APODERADO</td>
           <td class="cabecera">APELLIDOS</td>
           <td class="cabecera">NOMBRE</td>
           <td class="cabecera">DIRECCION</td>
           <td class="cabecera">TELEFONO</td>
					 <td class="cabecera">DNI</td>
					 <td class="cabecera">FECHA NACIMIENTO</td>
					 <td class="cabecera">SEXO</td>
					 <td class="cabecera">EMAIL</td>
           <td colspan="2" class="cabecera acciones">Acciones</td>
          </tr>
        </thead>
        <tbody>
          <?php while($row=$resultado->fetch_assoc()){?>
          <tr> </tr>
          <td><?php echo $row['idAlumno'];?></td>
					<td><?php echo $row['idApoderado'];?></td>
            <td><?php echo $row['apeAlumno'];?></td>
            <td><?php echo $row['nomAlumno'];?></td>
            <td><?php echo $row['dirAlumno'];?></td>
            <td><?php echo $row['telAlumno'];?></td>
						<td><?php echo $row['dniAlumno'];?></td>
						<td><?php echo $row['fnaAlumno'];?></td>
						<td><?php echo $row['sexAlumno'];?></td>
						<td><?php echo $row['emailAlumno'];?></td>
			      <td ><a  class="modificar" href="modificarDatosAlumno.php?id=<?php echo $row['idAlumno'];?>" class="enlaceboton">Modificar</a></td>
	         <td><a  class="eliminar" href="EliminarAlumno.php?id=<?php echo $row['idAlumno'];?>" class="enlaceboton1">Eliminar</a></td>
          </tr>
        </tbody>

        <?php } ?>
    </table>
	</div>
</body>

	 </table>
