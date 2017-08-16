<html>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD>
<body>
<table align="Center">
     <tr>
	 <?php
    require('a_conexion2.php');
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $ocupacion=$_POST['ocupacion'];
        $dni=$_POST['dni'];
        $telefono=$_POST['telefono'];

        $query="UPDATE apoderado SET  nomApoderado='$nombre',apeApoderado='$apellido',traApoderado='$ocupacion',
        dniApoderado='$dni',
        celApoderado='$telefono'
        WHERE idApoderado='$id'";
        $resultado=$mysqli->query($query);

        if ($resultado>0) {


    header("Location: Mantenimiento_Apoderado2.php");


      }else{
        echo "No se puedo actualizar. Comuniquese con el administrador";
      }

    ?>

</body>
</html>
