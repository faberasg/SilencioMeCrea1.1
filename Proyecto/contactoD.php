<?php

$nom = $_POST["nombre"];
$com = $_POST["comentario"];

require "php/conexion.php";

$correo = $mail;
$asunto = "Mensaje enviado desde el sitio por <br>". $nom;
$mensaje = "<b>Nombre:</b> <br> " . $nom;
$mensaje .= "<br> <b>Asunto:</b><br> " . $com;
$tipoContenido = "Content-type:text/html;charset=UTF-8";

mail($correo, $asunto, $mensaje, $tipoContenido);

echo "Mensaje enviado";
echo $mensaje;


?>