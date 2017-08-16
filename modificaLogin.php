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
        $usuario=$_POST['usuario'];
        $contrasena=$_POST['contrasena'];
        $codigo=$_POST['codigo'];
        $alumno=$_POST['alumno'];

        $query="UPDATE login SET
        usuario='$usuario',
        contrasena='$contrasena',
        codigo='$codigo',
        idAlumno='$alumno' 
        WHERE idlogin='$id'";
        $resultado=$mysqli->query($query);

        if ($resultado>0) {


    header("Location: listar_login.php");


      }else{
        echo "No se puedo actualizar. Comuniquese con el administrador";
      }

    ?>

</body>
</html>
