<?php
    session_start();
    $usuario = $_SESSION['usuario'];
    if($usuario == null || $usuario = ''){
        header('location:iniciar-sesion.php?pasos=2');
        die();
    }
?>