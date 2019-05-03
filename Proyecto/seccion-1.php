<?php


require 'php/conexion.php';


$sql = " SELECT * FROM publicacionesp WHERE id ='1' ";
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
	<title>Galería.</title>
</head>
<body>

   <form> 
<div >
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
    <a href="logout.php"><button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i>Cerrar sesión</i></button></a><br>
    
    
</div>
 </div>

<div action="updatep.php" method="post" class="col-md-9">
<div>
<div class="adm1">Galería<hr class="DaG">
</div><br>
<br>
<div class="Galeria">
<p>•Primer imagen:</p><hr><input id="foto_1"     type="file" name="foto_1" value="<?php echo $row["foto_1"]; ?>" ><br>
<br>
<p>•Segunda imagen:</p><hr><input type="file" name="foto_2" value="<?php echo $row["foto_2"]; ?>" ><br>
<br>
<p>•Tercera imagen:</p><hr><input type="file" name="foto_3" value="<?php echo $row["foto_3"]; ?>" >
</div><br>
<input type="hidden" name="id" value="  <?php echo $row["id"]; ?>">
<button class="btn btn-outline-info my-2 my-sm-0" type="submit"><i>Guardar</i></button><br>

</div>
</div>
</form>

</body>
</html>