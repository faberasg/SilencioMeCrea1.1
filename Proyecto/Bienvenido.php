<?php

require "php/conexion.php";

$sql = "SELECT * FROM publicacionesp";

$resultado = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($resultado);	



?>



<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<link rel="icon" href="img/icono.png" type="icono/png" sizes="16x16">
		<link rel="stylesheet"  href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet"  href="css/estilos.css">
		<link rel="stylesheet"  href="css/estilos.css">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
	<title>Bienvenido</title>
</head>

       
    
<body>

<div action="updatep.php" method="post">
  <div class="row row1">
      
    <div class="uno col-md-3">
    <div class="adm">ADMIN</div>
    <hr class="linea1">
    <div class="secci">
    <div class="Se"><i class="fas fa-folder-open"><a href="seccion-1.php"></i> Galería</div></a>
    <div class="Se"><i class="fas fa-folder-open"><a href="seccion-2.php"></i> Información</div></a>
    <div class="Se"><i class="fas fa-folder-open"><a href="seccion-3.php"></i> Video</div></a>
    <div class="Se"><i class="fas fa-folder-open"><a href="seccion-4.php"></i> Descripción</div></a><br>
    
    <a href="editor.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i>Usuarios</i></button></a><br>
    <br>
    <a href="logout.php"><button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i>Cerrar sesión</i></button></a>
    
</div>
 </div>

    
<div class=" bienvenido col-md-9">
<div>
<div class="bienve">Bienvenido al administrador
<img class="img col-12 col-sm-7 col-md-7 col-lg-5" src="img/logo.png" >  
</div><br>



</div>
</div>

</body>
</html>