<?php
require('a_conexion2.php');

// $sel = $mysqli->query("SELECT max(idAlumno) AS max_number, idAlumno FROM alumno ");

$sel = $mysqli->query("SELECT idAlumno, idAlumno FROM alumno ORDER BY idAlumno DESC");
$sel_row = $sel->fetch_object();
$id = $sel_row->idAlumno;
echo  "El id mayor es".$id;
?>
