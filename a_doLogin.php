<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css2/estilos.css">
	<style media="screen">
		h3{
					color: aliceblue;
		}
	</style>
</head>
</head>
<body>

		<?php
			include 'a_conexion.php';
			if(isset($_POST['btn_login'])){
				$usuario = $_POST['usu'];
				$contrasena = $_POST['contra'];
				$consulta = mysql_query("SELECT * FROM login INNER JOIN alumno on login.idAlumno = alumno.idAlumno  WHERE usuario='$usuario' AND contrasena='$contrasena'");
				if (mysql_num_rows($consulta)>0) {
					$row = mysql_fetch_array($consulta);
					$_SESSION["user"] = $row['usuario'];
					$_SESSION["nombre"] = $row['nomAlumno'];
          $_SESSION["apellido"] = $row['apeAlumno'];
					$_SESSION["email"] = $row['emailAlumno'];
					$_SESSION["dni"] = $row['dniAlumno'];
					$_SESSION["nacimiento"] = $row['fnaAlumno'];
					$_SESSION["telefono"] = $row['telAlumno'];


          echo "<div class='main'><br><br><br><br><br><br><br><center><h3>Cargando...</h3></center>";

          echo "<center><img src='img/giphy.gif' alt=''></center></div>";
          echo "<br>";

				  	echo '<center>Iniciando sesión para '.$_SESSION['user'].' <p></center>';
            echo '<script> window.location="a_principal.php"; </script>';
				}
				else{
					echo '<script> window.location="index.php"; </script>';
				}
			}
		?>




		    <div class="container">





					</div>
</body>
</html>
