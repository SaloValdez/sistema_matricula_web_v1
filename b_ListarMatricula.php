

<html>
<head>
<title>LISTAR Matricula</title>
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
</body>

	 </table>
