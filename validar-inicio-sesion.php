<?php
    session_start();
    require 'conbd.php';
    if (isset($_POST['sesion'])) {
        $email = $_POST['email'];
        $contrasena = $_POST['password'];
        $hash = md5($contrasena);
        $pasos = $_POST['pasos'];

        $query = $mbd -> prepare("SELECT * FROM registro WHERE email = :email AND password = :hash");
        $query -> bindValue(':email', $email);
        $query -> bindValue(':hash', $hash);
        $query->execute();
        $row = $query -> rowCount();
        
        if($row>0) {
            $_SESSION['usuario'] = $email;
            if($pasos == 1){
                header('location:direccion.php');
            }
            elseif($pasos == 2){
                header('location:compras.php');
            }
            else{
                header('location:index.php');
            }
        } else {
            header('location:iniciar-sesion.php');
        }
    }
     
?>