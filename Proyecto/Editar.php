<?php 

$idEdi = $_GET["idEditar"];

require "php/conexion.php";

$sql = "SELECT * FROM registrop WHERE id='$idEdi'";

$resultado = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($resultado);

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
	<title>Datos de <?php echo $row["nombre"];?> </title>

</head>
<body class="fondo ">
<div  class="jumbotron cont">
      

<form action="update.php" method="post">
		<h2>EDITAR</h2>
		<hr class="linea">
	 	<div class="caja1">
		    <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $row["nombre"];?>">
	 	</div>
	 	<div class="caja1">
	   		<input type="email" name="email" placeholder="Correo" value="<?php echo $row["email"];?>">
		 </div>
		 <div class="caja1">
	   		<input type="number" name="edad" placeholder="Edad" value="<?php echo $row["edad"];?>">
	 	</div>
	 	<input type="hidden" name="id" value="<?php echo $row["id"];?>">
		<input class="btn btn-outline-light" type="submit" value="Actualizar"> 
		<hr class="linea"> 
	</form>

	<div>
			<a href="inicio.php" class="btn btn-primary">Regresar</a>
		</div>
		<div class="mensaje">
     </div>
    </div>
    
    
    
  </body>
</html>