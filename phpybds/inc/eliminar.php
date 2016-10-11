<?php 
require('conexion.php');
$id=$_GET['id'];

  $eliminar="DELETE FROM datos WHERE id='$id'";
  $resultado=$mysqli->query($eliminar);
  header("Location: ../administrar.php"); 
  exit(); 
?>