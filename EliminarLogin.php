
<?PHP
  require('a_conexion2.php');
  $id=$_GET['id'];
  $query="DELETE FROM login WHERE idlogin='$id'";
  $resultado=$mysqli->query($query);
?>


  <?php


  if ($resultado>0) {
      header('location: Listar_login.php');
  }else{
    echo "  no se elimino el registro";
  }


   ?>
