<?php
    session_start();
    require 'conbd.php';
    if (isset($_POST['sesion'])) {
        $email = $_POST['email'];
        $contrasena = $_POST['password'];
        $hash = md5($contrasena);

        $query = $mbd -> prepare("SELECT * FROM registro WHERE email = :email AND password = :hash");
        $query -> bindValue(':email', $email);
        $query -> bindValue(':hash', $hash);
        $query->execute();
        $row = $query -> rowCount();
        
        if($row==1) {
            $_SESSION['usuario'] = $email;
            header('location:index.php');

        
        } else {
            header('location:iniciar-sesion.php?error=Error de sesion');
        }
    }
     
?>