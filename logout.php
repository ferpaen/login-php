<?php
    session_start();
    include('database.php');
    if(isset($_SESSION['nick_usuario'])) {
        session_destroy();
        header("Location: index.php");
    }else{
        echo "Error desconocido";
    }
?> 