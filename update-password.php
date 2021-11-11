<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<div class="container-fluid">
    <body>
        <?php
         require 'menu.php';
         ?>
         <div class="border-bottom mb-3">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <p class="text-center h2">
                        <i class="fas fa-users-cog"><span> Actualizar datos </span></i>
                    </p>
                </div>
            </div>
        </div>
        <form action="update-password.php" method="POST" class="">
                <p class="text-center"><input type="password" name="password" placeholder="Nueva contraseña" class="col-6 mb-3 mt-2" ><br>
                    <button type="submit" class="btn btn-primary " name="botonName">Actualizar</button></p>
                
            </form>
    </body>
</div>
</html>

<?php
    require 'conbd.php';
    if (isset($_POST['botonName'])) {
    $password = $_POST['password'];
    $hash = md5($password);
    $id = $arry[0];

    $query = $mbd -> prepare("UPDATE registro SET password = :password WHERE id = :id ");
    
    $query -> bindValue(':password', $hash);
    $query -> bindValue(':id', $id);
    $query -> execute();
    header('location:user.php?respuesta=Registro actualizado');
    }
?>