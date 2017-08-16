<?php

$apoderado = $_POST['apoderado'];
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];
$fnacimiento = $_POST['fnacimiento'];
$genero = $_POST['genero'];
$email = $_POST['email'];

include("a_conexion2.php");

$insertar = "INSERT INTO alumno SET
idApoderado='$apoderado',
apeAlumno='$apellido',
nomAlumno='$nombre',
dirAlumno='$direccion',
telAlumno='$telefono',
dniAlumno='$dni',
fnaAlumno='$fnacimiento',
sexAlumno='$genero',
emailAlumno='$email'";

$ejecutar = $mysqli->query($insertar);

printf ("Nuevo registro con el id %d.\n", $mysqli->insert_id);

if ($ejecutar->errno)die($ejecutar->error);
mysqli_close($mysqli);




// header('location:Mantenimiento_Alumno2.php');
?>
<!-- <script> window.location="Listar_Empleado2.php"; </script> -->
