<?php

	require 'conexion.php';
	$where = "";
    $sql = "SELECT * FROM usuario_comun";
    $resultado = $mysqli->query($sql);
	?>
<html lang="es">
<title>Ezservice</title>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel=stylesheet>
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
            
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/estilos.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="css/estilos.css" type="text/css" rel="stylesheet" media="screen,projection"/>

	</head>

	<body>
		<div class="container">
			
				<h2 style="text-align:center">Usuarios Comunes</h2>
            <br>
            <div class="row table-responsive" >
                <table class="table">
            <thead class="thead-dark" >
                <tr>
                    <th>ID</<th>
                    <th>Nombre</<th>
                    <th>Apellido</<th>
                    <th>Sexo</<th>
                    <th>Correo</<th>
                    <th>Telefono</<th>
                    <th>Imagen</<th>
					<th></<th>
					<th></<th>  
                </tr>
            </thead>

            <tbody>
            <?php while ($row = $resultado->fetch_array(
                MYSQLI_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['sexo']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td><?php echo $row['imagen']; ?></td>

                <td><a href="modificaruc.php"?id = <?php echo $row['id']; ?>>Modificar </a></td>
                <td><a href="#" data-href="eliminaruc.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Eliminar</span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>