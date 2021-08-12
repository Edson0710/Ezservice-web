<?php
	$mysqli = new mysqli('localhost', 'root', '', 'ezservices');

	if($mysqli->connect_error){
		die("Error en la conexion" . $mysqli->connect_error);
	}

	printf("Servidor informacion: %s\n", $mysqli->server_info);


?>