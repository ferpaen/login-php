<?php
    //Una vez hagamos login ya debemos usar session_start. Las variables con session start se conservan para toda la página
    session_start();
    //database.php es el archivo en el que debemos configurar la conexión a la BBDD
    include('database.php');
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- TODAS las líneas genéricas del head se cargarán desde el head.php -->
		<?php include("head.php"); ?>
		<title>Inicio de sesión</title>
	</head>
	<body>
	<?php
	    if(empty($_SESSION['usuario_nombre'])) {
	    /* Comprobamos que las variables de sesión estén vacías. Si está vacía es que no hemos hecho login aun.
	     * Entonces lanza el formulario envia los datos a comprobar.php */
	?>
		<div id="login" class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="./img/logo/earth.png" class="center-block logo">
					<br/>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<form action="validate.php" class="form-signin" role="form" method="post">
						<h3 class="form-signin-heading textCenter">Inicio de sesión</h3>
						<br/>
						<input type="text" name="user" class="form-control" placeholder="Usuario" required autofocus>
						<input type="password" name="pass" class="form-control" placeholder="Password" required>
						<br/>
						<br/>
						<button class="btn btn-lg btn-volver btn-block" type="submit">Acceder</button>
						<br/>
						<br/>
						<br/>
					</form>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-12">
					<p class="textCenter"><a href="http://miyo20.es/about-me/" target="_blank">Fernando Pablo</a></p>
				</div>
			</div>
		</div> <!-- /container -->
	<?php
	    }else {
	?>
	        <div id="login" class="container">
	        	<div class="row">
					<div class="col-md-12">
						<img src="./img/logo/earth.png" class="center-block logo" style="max-width: 100%">
						<br/>
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<h2>Aviso de seguridad</h2>
						<p>la sesión ya estaba iniciada</p>
						<a class="btn btn-warning btn-mrgn" href="home.php">Inicio</a>
						<a class="btn btn-warning btn-mrgn" href="#">Desconectar</a>
					</div>
					<div class="col-md-4"></div>
				</div>
		</div> <!-- /container -->
	<?php
	    }
	?>  
	</body>
</html>
