<?php


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
	<title>Login</title>

</head>
<body class="fondo ">
<div  class="jumbotron cont">
      

<form action="datosIngre.php" method="post">
		<h2>INGRESAR</h2>
		<hr class="linea">
	 	<div class="caja1">
		    <input type="text" name="usuario" placeholder="Usuario">
	 	</div>
	 	<div class="caja1">
	   		<input type="password" name="contrasena" placeholder="Contraseña">
	 	</div>
		<input class="btn btn-outline-light" type="submit" value="Ingresar"> 
		<hr class="linea"> 
	</form>

	<div>
			<a href="inicio.php" class="btn btn-primary">Regresar</a>
		</div>
		<div class="mensaje">
     <?php
     if(isset($_GET ["error"])){
       echo "<i>los datos son incorrectos</i>";
     }
     ?>
     </div>
    </div>
    
    
    
  </body>
</html>