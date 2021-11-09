<?php
    require_once 'conbd.php';
    if (isset($_POST['registrar'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password1 = $_POST['pasword'];
        $password2 = $_POST['pasword2'];
        $hash = md5($password1);
        if($password1 == $password2){
        $answer = $mbd->prepare("INSERT INTO registro (name, email, password) VALUES (:name, :email, :password)");
        $answer -> bindValue(':name', $name);
        $answer -> bindValue(':email', $email);
        $answer -> bindValue(':password', $hash);
        $answer -> execute();
        $repuesta = "Registro guardado";
        header('location:iniciar-sesion.php?query='.$repuesta);
        }
        else{
            header('location:registro.php?error=Las contraseñas no son iguales');
        }
        
    }