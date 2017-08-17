<?php
// sleep(3.7);
session_start();
include 'a_conexion.php';

$usuarioActivo = $_SESSION['user']; //para mostrar en la pagina()
$usuarioNumbre = $_SESSION['nombre'];
$usuarioApellido = $_SESSION['apellido'];
$usuarioEmail= $_SESSION['email'];
$usuarioDni = $_SESSION['dni'];
$usuarioNacimiento = $_SESSION['nacimiento'];
$usuarioTelefono = $_SESSION['telefono'];
if(!isset($_SESSION['user'])) {
    echo '<script> window.location="index.php"; </script>';
}
?>


<?php

//apoderado

$nombreApo = $_POST['nombreApo'];
$apellidoApo= $_POST['apellidoApo'];
$ocupacionApo= $_POST['ocupacionApo'];
$dniApo = $_POST['dniApo'];
$celApo= $_POST['celApo'];
$dirApo = $_POST['dirApo'];

//alumno
$nombreAlu = $_POST['nombreAlu'];
$apellidoAlu= $_POST['apellidoAlu'];
$dirAlu = $_POST['dirAlu'];
$telAlu = $_POST['telAlu'];
$dniAlu = $_POST['dniAlu'];
$fecNacAlu = $_POST['fecNacAlu'];
$genAlu = $_POST['genAlu'];
$correoAlu= $_POST['correoAlu'];

//matricula
$fechaMat = $_POST['fechaMat'];
$horaMat = $_POST['horaMat'];
$carreraMat = $_POST['carreraMat'];
$nivelMat= $_POST['nivelMat'];
$empleMat= $_POST['empleMat'];
$gradoMat= $_POST['gradoMat'];
$seccionMat = $_POST['seccionMat'];
$costoMat = $_POST['costoMat'];







include("a_conexion2.php");

$insertar1 = "INSERT INTO apoderado SET
nomApoderado='$nombreApo',
apeApoderado='$apellidoApo',
traApoderado='$ocupacionApo',
dniApoderado='$dniApo',
celApoderado='$celApo',
dirApoderado='$dirApo'";
$ejecutar = $mysqli->query($insertar1);


// $sel = $mysqli->query("SELECT max(idAlumno) AS max_number, idAlumno FROM alumno ");

$sel = $mysqli->query("SELECT idApoderado, idApoderado FROM apoderado ORDER BY idApoderado DESC");
$sel_row = $sel->fetch_object();
$id_MaxApo = $sel_row->idApoderado;
// echo  "El id mayor es".$id;

$insertar2 = "INSERT INTO alumno SET
idApoderado='$id_MaxApo',
apeAlumno='$apellidoAlu',
nomAlumno='$nombreAlu',
dirAlumno='$dirAlu',
telAlumno='$telAlu',
dniAlumno='$dniAlu',
fnaAlumno='$fecNacAlu',
sexAlumno='$genAlu',
emailAlumno='$correoAlu'";
$ejecutar = $mysqli->query($insertar2);


// $sel = $mysqli->query("SELECT max(idAlumno) AS max_number, idAlumno FROM alumno ");

$sel = $mysqli->query("SELECT idAlumno, idAlumno FROM alumno ORDER BY idAlumno DESC");
$sel_row = $sel->fetch_object();
$id_MaxAlu = $sel_row->idAlumno;
// echo  "El id mayor es".$id;

$insertar3 = "INSERT INTO matricula SET
idAlumno='$id_MaxAlu',
idGrado='$gradoMat',
fecMatricula='$fechaMat',
horMatricula='$horaMat',
costMatricula='$costoMat',
nivelMatricula='$nivelMat',
idEmpleado='$empleMat',
idSeccion='$seccionMat',
idCarrera='$carreraMat'";

$ejecutar = $mysqli->query($insertar3);
printf ("Nuevo registro con el id %d.\n", $mysqli->insert_id);

if ($ejecutar->errno)die($ejecutar->error);
mysqli_close($mysqli);




header('location:b_ListarMatricula2.php');
?>
<!-- <script> window.location="Listar_Empleado2.php"; </script> -->
