<?php
session_start();
include('database.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("head.php"); ?>
<title>Inicio</title>
</head>

<body>
<?php
    if(isset($_SESSION['nick_usuario'])) {
?>
  <?php include("navi.php"); ?>
    <div class="container">
    	 <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                    <br/>
                    <p class="text-center resaltado">Hola <?=$_SESSION['nombre_usuario']?>, has iniciado sesión correctamente.</p>
                </div>
            <div class="col-md-2"></div>
        </div><!-- /.row -->
    </div> <!-- /container -->
<?php
    }else{
        header("Location: index.php");
    }
?>
  </body>
</html>