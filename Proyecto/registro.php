<?php

require 'php/conexion.php';

$nom = $_POST["nombre"];
$mail = $_POST["email"];
$edad = $_POST["edad"];



$sql ="SELECT * FROM registrop WHERE nombre = '$nom' OR email = '$mail' ";
$resultado = mysqli_query($conexion, $sql);

$count = mysqli_num_rows($resultado);

if ($count == 1){
    echo "El nick ya existe, seleccione otro";
}
else{
    $sql2 = "INSERT INTO registrop (id, nombre, email, edad) VALUES (NULL, '$nom', '$mail', '$edad') ";
    
    $result2 = mysqli_query($conexion, $sql2);
    echo "El usuario fue registrado exitosamente";
}


//echo "<script> location.href='editor.php'</script>";

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="icon" href="img/icono.png" type="icono/png" sizes="16x16">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/estilos.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
    <title>Datos registrados</title>
    <style>
    body{ text-align: center;

}    </style>


</head>
<body>

   <br>
   <hr>
	<div>
			<a href="registro.html" class="btn btn-primary">Regresar</a>
		</div>
		

  </body>
</html>




