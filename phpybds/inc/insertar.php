<?php 

require('conexion.php');
$nombre=$_POST['nombre'];
$titulo=$_POST['titulo'];

$insertar="INSERT INTO datos(nombre,titulo) VALUES ('$nombre','$titulo')";
$resultado=$mysqli->query($insertar);
header("Location: ../index.php");
exit();

?>