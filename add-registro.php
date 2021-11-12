<?php
    require_once 'conbd.php';
    if (isset($_POST['registrar'])) {
        $pasos = $_POST['pasos'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password1 = $_POST['password'];
        $password2 = $_POST['password1'];
        $hash = md5($password1);
        if($name == null || $email == null || $password1 == null || $password2 == null)    {
            header('location:registro.php?error=Favor de llenar todos los campos');
        }
            
        else{
            if($password1 == $password2){
            $answer = $mbd->prepare("INSERT INTO registro (name, email, password) VALUES (:name, :email, :password)");
            $answer -> bindValue(':name', $name);
            $answer -> bindValue(':email', $email);
            $answer -> bindValue(':password', $hash);
            $answer -> execute();
            $repuesta = "Registro guardado";
            header('location:iniciar-sesion.php?query='.$repuesta.'&pasos='.$pasos );
            }else{
                header('location:registro.php?error=Las contraseñas no son iguales');
            }
        }
        
    }