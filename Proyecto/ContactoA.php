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
	<title>Contactenos</title>

</head>
<body class="fondo ">
<div  class="jumbotron cont">
      
<form action="contacto.php" method="post">			
<h2>Contactenos</h2>
<hr class="linea"> 
	 	<div class="caja1">
		    <input type="text" name="nombre" placeholder="Nombre" >
	 	</div>
	 	<div class="caja1">
		 <textarea class="cuadro" name="comentario" placeholder="Contenido:"  required></textarea>
	 	</div>
		<input class="btn btn-outline-light" type="submit" value="Enviar">
		<hr class="linea"> 
		
		<div>
			<a href="inicio.php" class="btn btn-primary">Regresar</a>
		</div>
		</div>
		
	


		
    

		</form>

    
  </body>
</html>