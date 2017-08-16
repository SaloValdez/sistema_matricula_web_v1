<?php
  require('a_conexion2.php');
//////////////// VALORES INICIALES ///////////////////////



$tabla="";
$query="SELECT * FROM apoderado ORDER BY idApoderado";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['apoderado']))
{
	$q=$mysqli->real_escape_string($_POST['apoderado']);
	$query="SELECT * FROM apoderado WHERE
		idApoderado LIKE '%".$q."%' OR
		nomApoderado LIKE '%".$q."%' OR
		apeApoderado LIKE '%".$q."%' OR
		dniApoderado LIKE '%".$q."%'";
}

$buscarAlumnos=$mysqli->query($query);
if ($buscarAlumnos->num_rows > 0)
{
	$tabla.=
	'<table class="table">
		<tr class="bg-primary">
			<td class="cabecera">ID </td>
			<td class="cabecera">NOBRE</td>
			<td class="cabecera">APELLIDO</td>
			<td class="cabecera">DNI</td>
			<td class="cabecera">OCUPACION</td>
			<td class="cabecera">TELEFONO</td>
			<td class="cabecera">ACCIONES</td>
		</tr>';

	while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
		$tabla.=
		"<tr>
			<td> ".$filaAlumnos['idApoderado']. "</td>
			<td> ".$filaAlumnos['nomApoderado']. "</td>
			<td> ".$filaAlumnos['apeApoderado']. "</td>
			<td> ".$filaAlumnos['dniApoderado']. "</td>
			<td> ".$filaAlumnos['traApoderado']. "</td>
			<td> ".$filaAlumnos['celApoderado']. "</td>
			<td><a   href='b_Nueva_Matricula2.php?id=". $filaAlumnos['idApoderado']." '  class='btn btn-warning'>Enviar</a></td>
		 </tr>
		 ";
	}

	$tabla.='</table>';
} else
	{
		$tabla="
		<div class='alert alert-info'><b>No se encontraron coincidencias con sus criterios de búsqueda....</b></div>";
	}


echo $tabla;






?>
