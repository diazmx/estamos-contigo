<?php
	$server="localhost";
	$user="root";
	$pass="";
	$db="estamoscontigo";

    $conexion = mysqli_connect($server, $user, $pass, $db) or die ("Error al conectar a la base de datos");
?>