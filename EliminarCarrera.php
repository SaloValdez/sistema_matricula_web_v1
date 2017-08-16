<?PHP
  require('a_conexion2.php');
  $id=$_GET['id'];
  $query="DELETE FROM carrera WHERE idCarrera='$id'";
  $resultado=$mysqli->query($query);
?>


  <?php

  
  if ($resultado>0) {
      header('location: Mantenimiento_Carrera2.php');
  }else{
    echo "  no se elimino el registro";
  }


   ?>
