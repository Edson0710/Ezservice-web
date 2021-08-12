<!DOCTYPE html>
<html lang="es">
	<title>Ezservice</title>
	<link rel="icon" type="image/png" href="images/icono2.png">
		
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title> EZService </title>

				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
            
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
            <link href="css/estilos.css" type="text/css" rel="stylesheet" media="screen,projection"/>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
            <link href="css/estilos.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
	<body background="images/ladrillo.jpg">
        

						<nav class="black" role="navigation" >
            <div class="nav-wrapper container">
                <a  id="logo-container" href="paginaprincipal.html" class="brand-logo"> EZService <i class="material-icons"> <img class="responsive-img" src="images/icono2.png" width="65" height="65" href="paginaprincipal.html"> </i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">  </a></li>
                    
                    <li><a href="inicio_sadmin1.html" ALIGN="center"><FONT SIZE=4>Iniciar Sesion</FONT></a></li>
                    <li><a href="#Registro"><FONT SIZE=4>Registrarse</FONT></a></li>
                </ul>
            </div>
				</nav>
				
            </ul>
			<div class="row">
    <div class="col s1 m4 offset-m4">
		<div class="card">
		<div class="card-action teal lighten-1 white white-text" ALIGN="justify">
				<h4 style="text-align:center">Registro de Usuario Servidor</h4>
			</div>
			
			<div class="card-content">
			<form class="form-horizontal" method="post" action="guardar_us.php" autocomplete="off" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>

				<div class="form-group">
					<label for="apellido" class="col-sm-2 control-label">Apellidos</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" required>
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Edad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="edad" name="edad" placeholder="Edad" required>
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
				</div>

				<div class="form-group">
					<label for="password" class="col-sm-2 control-label">Contrase&ntildea</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="sexo" class="col-sm-2 control-label">Seleccione sexo:</label>
					
					<div class="col-sm-10">
						
						<label class="radio-inline">
							<input name="radio" type="radio" checked />
							<span>M</span>
						  </label>
						  <label class="radio-inline">
							<input name="radio" type="radio"  />
							<span>F</span>
						  </label>
					</div>
				</div>

				<div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Archivo</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="archivo" name="archivo">
					</div>
					<br>
				</div>
				<br>
								
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="Pagina_Principal.html" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
</div>
	</body>

	
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>
</html>