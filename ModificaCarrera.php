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
        $carrera=$_POST['carrera'];
        $query="UPDATE carrera SET

        descCarrera='$carrera'
        WHERE idCarrera='$id'";
        $resultado=$mysqli->query($query);

        if ($resultado>0) {


    header("Location: Mantenimiento_Carrera2.php");


      }else{
        echo "No se puedo actualizar. Comuniquese con el administrador";
      }

    ?>

</body>
</html>
