<?php
	require 'conexion.php';

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$sexo=$_POST['sexo'];
	$email=$_POST['email'];
	$contrasena=$_POST['contrasena'];
	$telefono=$_POST['telefono'];
	

	$sql = "INSERT INTO usuario__intermedio(nombre, apellido, sexo, correo, contrasena, telefono) VALUES ('$nombre', '$apellido', '$sexo', '$email','$contrasena', '$telefono')";
	$resultado = $mysqli->query($sql);


?>

<html lang="es">
<title>Ezservice</title>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel=stylesheet>
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align: center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
					<?php } else{ ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					<a href="index.php" class="btn btn-primary">Regresar</a>
				</div>
				
			</div>
			
		</div>
		
	</body>

</html>