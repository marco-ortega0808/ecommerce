<?php
 require 'validar-sesion-iniciada.php'
?>
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
        <div class="border-bottom">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <p class="text-center h2">
                        <i class="fas fa-users-cog"><span> Mis datos </span></i>
                    </p>
                </div>
            </div>
        </div>

            <div class="container">
                <div class="row mt-3 mb-3">
                    <span class="fas fa-user col"></span>
                    <label class="col-6 text-start">
                        <?php 
                            print $arry[1];
                        ?>
                    </label>
                    <a href="update-name.php?nombre=<?php print $arry[1];?>" class="text-end col"><span class="far fa-edit "></span></a>
                    <a href="update-name.php?nombre=<?php print $arry[1];?>" class="col-2 text-start"> Editar </a>
                </div>
                <div class="row mb-3">
                    <span class="fas fa-at col"></span>
                    <label class="col-6 text-start">
                        <?php 
                            print $arry[2];
                        ?>
                    </label>
                    <a href="update-email.php?correo=<?php print $arry[2];?>" class="text-end col"><span class="far fa-edit "></span></a>
                    <a href="update-email.php?correo=<?php print $arry[2];?>" class="col-2 text-start"> Editar </a>
                </div>
                <div class="row mb-3">
                    <span class="fas fa-unlock-alt col"></span>
                    <label class="col-6 text-start">
                        **************
                    </label>
                    <a href="update-password.php" class="text-end col"><span class="far fa-edit "></span></a>
                    <a href="update-password.php" class="col-2 text-start"> Editar </a>
                </div>
            </div>   
            <p class="text-center">
            <a href="index.php">Regresar</a>
            </p> 
            <p class="text-center">
                <?php
                    $mostrarEstado = $_GET['respuesta'];
                    print $mostrarEstado;
                ?>
            </p>

    </body>
</div>
</html>