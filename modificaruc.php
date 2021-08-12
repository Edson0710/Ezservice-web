<?php
	require 'conexion.php';
	
	$id = $_POST['id'];	
	$sql = "SELECT * FROM usuario_comun WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">Modificar Registro</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="updateuc.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
                
                <div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']; ?>" required>
					</div>
                </div>

                <div class="form-group">
					<label for="hijos" class="col-sm-2 control-label">Sexo</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="sexo" name="sexo" value="1" <?php if($row['sexo']=='1') echo 'checked'; ?>> M
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="sexo" name="sexo" value="0" <?php if($row['sexo']=='0') echo 'checked'; ?>> F
						</label>
					</div>
                </div>
                
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="<?php echo $row['correo']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" value="<?php echo $row['contrasena']; ?>"  required>
					</div>
				</div>
                
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']; ?>" >
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>