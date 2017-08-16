<?php

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$codigo = $_POST['codigo'];
$alumno = $_POST['alumno'];

include("a_conexion2.php");

$insertar = "INSERT INTO login SET
usuario='$usuario',
contrasena='$contrasena',
codigo='$codigo',
idAlumno='$alumno'";

$ejecutar = $mysqli->query($insertar);

if ($ejecutar->errno)die($ejecutar->error);
mysqli_close($mysqli);

header('location:listar_login.php');
?>
<!-- <script> window.location="Listar_Empleado2.php"; </script> -->
