<?php 

$idEli = $_GET["idElim"];

require 'php/conexion.php';

$sql = "DELETE FROM registrop WHERE id='$idEli'";

$resultado = mysqli_query($conexion, $sql);


echo "<script> location.href='editor.php'</script>";

?>

