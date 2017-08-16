<?php
$mysqli=new mysqli("localhost","root","","dbmatricula");
if(mysqli_connect_error()){
echo "conexion fallida"; mysqli_connect_error();
exit();}
?>
