<?php

$carrera= $_POST['carrera'];


include("a_conexion2.php");

$insertar = "INSERT INTO carrera SET
descCarrera='$carrera'";

$ejecutar = $mysqli->query($insertar);

if ($ejecutar->errno)die($ejecutar->error);
mysqli_close($mysqli);

header('location:Mantenimiento_Carrera2.php');
?>
<!-- <script> window.location="Listar_Empleado2.php"; </script> -->
