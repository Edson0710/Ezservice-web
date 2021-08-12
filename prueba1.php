
<?php

require 'conexion.php';
$where = "";
$sql = "SELECT * FROM usuario_comun";
$resultado = $mysqli->query($sql);
?>
<!DOCTYPE html>

<html lang="en">
  <title> EZService </title>
  <link rel="icon" type="image/png" href="images/icono2.png">
  <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/estilos.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>		<link href="css/estilos.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel=stylesheet>
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

  <title>Usuarios Comunes</title>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Administrar </div>
      <div class="list-group list-group-flush">
        <a href="ucs.php" class="list-group-item list-group-item-action bg-light">Usuarios Comunes</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Usuarios Servidores</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Usuarios Intermedios</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Empresas</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar border-bottom"  class="p-3 mb-2 bg-info text-white">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul >
            <li class="nav-item ">
            </li>
          </ul>
        </div>
      </nav>


      <div class="container">
			
				<h2 style="text-align:left">Usuarios Comunes</h2>
            <br>
            <div class="w-100 p-3" >
                <table  ALIGN="left" >
            <thead>
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
		
	
  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	

</body>

</html>
