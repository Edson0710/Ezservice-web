<?php

	require 'conexion.php';
	$where = "";
	$sql = "SELECT * FROM "

	?>
<html lang="es">
<title>Ezservice</title>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel=stylesheet>
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</head>

	<body>
		<div class="container">
			
				<h2 style="text-align:center">Bienvenido Administrador</h2>
			

			<div class="row">
				<a href="nuevo_uc.php" class="btn btn-primary">Nuevo Usuario comun</a>
			</div>
			<br>
			<div class="row">
				<a href="nuevo_us.php" class="btn btn-primary">Nuevo Usuario Servidor</a>
			</div>
			<br>
			<div class="row">
				<a href="nuevo_ui.php" class="btn btn-primary">Nueva Empresa</a>
			</div>
			<br>
			<div class="row">
				<a href="nuevo_categoria.php" class="btn btn-primary">Nueva Categoria</a>
			</div>
		</div>
	</body>

</html>
