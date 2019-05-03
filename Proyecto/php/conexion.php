<?php

require ('datos.php');

$conexion = mysqli_connect($servidorBD, $usuarioBD, $contraBD, $nombreBD );

mysqli_set_charset($conexion,"utf8");


?>