

<?php 

$nom = $_POST["usuario"];
$contra = $_POST["contrasena"];


require 'php/conexion.php';

$sql = "SELECT * FROM loginp WHERE usuarios ='$nom' AND contrasena ='$contra'";

$resultado = mysqli_query($conexion, $sql);

$contador = mysqli_num_rows($resultado);

if ($contador == 1) {
	session_start();
	$_SESSION["usuario"] = $nom;

    echo "<script> location.href='editor.php'</script>";
    
}else{

    echo "<script> location.href='login.php?error=dato'</script>";
}

?>	
