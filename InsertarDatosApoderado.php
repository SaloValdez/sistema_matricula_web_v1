<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$ocupacion = $_POST['ocupacion'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];

include("a_conexion2.php");

$insertar = "INSERT INTO apoderado SET
nomApoderado='$nombre',
apeApoderado='$apellido',
traApoderado='$ocupacion',
dniApoderado='$dni',
celApoderado='$telefono'";

$ejecutar = $mysqli->query($insertar);

if ($ejecutar->errno)die($ejecutar->error);
mysqli_close($mysqli);

header('location:Mantenimiento_Apoderado2.php');
?>
<!-- <script> window.location="Listar_Empleado2.php"; </script> -->
