<?php


require 'php/conexion.php';


$sql = " SELECT * FROM registrop ";
$resultado = mysqli_query($conexion, $sql);

session_start();

if(isset($_SESSION["usuario"])) {

}
else{

  echo "<script> location.href='login.php'</script>";
}



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
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
	<title>Editor de Registro.</title>
</head>
<body>

<div>
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

    
<div class=" col-md-9">
<div>
<div class="adm1">Datos Registrados<hr class="Da">
</div><br>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"><i>Nombre:</i></th>
      <th scope="col"><i>Correo:</i></th>
      <th scope="col"><i>Edad:</i></th>
      <th scope="col"><i>Editar:</i></th>
      <th scope="col"><i>Eliminar:</i></th>
      <th scope="col"><i>Enviar Correo:</i></th>
      
    </tr>
  </thead>
  
      
  <?php 
  while ($row = mysqli_fetch_array($resultado)) { 
    echo "<tbody>";
    echo "<tr>";
    echo "<th>" . $row["nombre"] . "</th>"; 
    echo "<th>" . $row["email"] . "</th>"; 
    echo "<th>" . $row["edad"] . "</th>"; 

    echo "<td><a href='Editar.php?idEditar=";
    echo $row['id'];
    echo "'><button class='btn btn-info'><i>Editar</i></button></a></td>";


    echo "<td><a href='eliminar.php?idElim=";
    echo $row['id'];
    echo "'><button class='btn btn-danger'><i>Eliminar</i></button></a></td>";

    echo "<td><a href='ContactoC.php?idContacto=";
    echo $row['id'];
    echo "'><button class='btn btn-warning'><i>Enviar Correo</i></button></a></td>";
      
    echo "</tr>";
    echo "</tbody>";
}
  ?>
  
</table>


</div>
</div>

</body>
</html>