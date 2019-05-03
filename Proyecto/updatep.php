<?php 


$fot1 = $_POST["foto_1"];
$fot2 = $_POST["foto_2"];
$fot3 = $_POST["foto_3"];
$titu = $_POST["titulo"];
$deta = $_POST["detalles"];
$video = $_POST["video"];
$fot4 = $_POST["foto_4"];
$fot5 = $_POST["foto_5"];
$titu2 = $_POST["titulo_2"];
$deta2 = $_POST["detalles_2"];
$id = $_POST["id"]; 


require 'php/conexion.php';

$sql = "UPDATE publicacionesp SET foto_1 = '$fot1', foto_2 = '$fot2', foto_3 = '$fot3', titulo = '$titu', detalles = '$deta', video = '$video', foto_4 = '$fot4', foto_5 = '$fot5', titulo_2 = '$titu2', detalles_2 = '$deta2' WHERE id = '$id' ";

$resultado = mysqli_query($conexion, $sql);


echo "<script> location.href='Bienvenido.php'</script>";





?>