<?php 
require('conexion.php');

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$titulo=$_POST['titulo'];

$modificar="UPDATE datos SET nombre='$nombre', titulo='$titulo' WHERE id='$id'";
$resultado=$mysqli->query($modificar);
header("Location: ../index.php");
exit();

?>