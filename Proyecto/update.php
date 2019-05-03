<?php 


$nom = $_POST["nombre"];
$mail = $_POST["email"];
$edad = $_POST["edad"];
$id = $_POST["id"]; 


require 'php/conexion.php';

$sql = "UPDATE registrop SET nombre = '$nom', email = '$mail', edad = '$edad' WHERE id = '$id' ";

$resultado = mysqli_query($conexion, $sql);


echo "<script> location.href='Bienvenido.php'</script>";






?>