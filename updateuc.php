<?php
	require 'conexion.php';
	
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$sexo=$_POST['sexo'];
	$correo=$_POST['correo'];
	$contrasena=$_POST['contrasena'];
	$telefono=$_POST['telefono'];

	$sql = "UPDATE usuario_comun SET nombre='$nombre', apellido='$apellido', sexo='$sexo', correo='$correo', contrasena='$contrasena',telefono='$telefono' WHERE id = '$id'";
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
						<h3>Registro Modificado</h3>
					<?php } else{ ?>
						<h3>Error al Modificar</h3>
					<?php } ?>
					<a href="index.php" class="btn btn-primary">Regresar</a>
				</div>
				
			</div>
			
		</div>
		
	</body>

</html>