<?php
    session_start();
    $usuario = $_SESSION['usuario'];
    $seguimiento = $_GET['pasos'];
    if($usuario == null || $usuario = ''){
        header('location:iniciar-sesion.php?sesion='.$seguimiento);
        die();
    }
?>