<html>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD>
<body>
<table align="Center">
     <tr>
       <?php
        require('a_conexion2.php');
          $codigo=$_POST['codigo'];
          $apoderado=$_POST['apoderado'];
          $apellido=$_POST['apellido'];
          $nombre=$_POST['nombre'];
          $direccion=$_POST['direccion'];
          $telefono=$_POST['telefono'];
          $dni=$_POST['dni'];
          $fecha=$_POST['fecha'];
          $genero=$_POST['genero'];
          $email=$_POST['email'];



          $query="UPDATE alumno SET
          idApoderado='$apoderado',
          apeAlumno='$apellido',
          nomAlumno='$nombre',
          dirAlumno='$direccion',
          telAlumno='$telefono',
          dniAlumno='$dni',
          fnaAlumno='$fecha',
          sexAlumno='$genero',
          emailAlumno='$email'

          WHERE idAlumno='$codigo'";
          $resultado=$mysqli->query($query);
      ?>
              <title>REGISTRO MODIFICADO</title>
              <center>
                <?PHP if($resultado>0){ ?>
                <h1>REGISTRO MODIFICADO</h1>
                   <?php header("location:Mantenimiento_Alumno2.php") ?>
                <?PHP }else{ ?>
                <h1>SE ACTUALIZO CORRECTAMENTE</h1>

                <?php } ?>
</body>
</html>
