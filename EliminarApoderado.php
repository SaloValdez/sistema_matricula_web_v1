<?PHP
  require('a_conexion2.php');
  $id=$_GET['id'];
  $query="DELETE FROM apoderado WHERE idApoderado='$id'";
  $resultado=$mysqli->query($query);
?>


  <?php


  if ($resultado>0) {
      header('location: Mantenimiento_Apoderado2.php');
  }else{
    echo "  no se elimino el registro";
  }


   ?>
