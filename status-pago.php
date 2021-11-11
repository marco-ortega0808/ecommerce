<?php
 require 'validar-sesion-iniciada.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago confirmado</title>
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
            $exito = $_GET['exito'];
            
                
        ?>
        <div class="border-bottom">
                <div class="row mt-3">
                    
                    <div class="col-12">
                        <p class="text-center h2">3. Estado de pagoo</p>
                    </div>
                </div>
            </div>
        <p class="text-center h1 mt-5">¡Este es el estado de su pago!</p>
        <?php
        print $exito;
        ?>
        <p class="text-center mt-3">Espere a que su pago sea confirmado o vuelva a intentarlo</p>
        <p class="text-center">
        <a href="index.php" class=" btn btn-primary mt-2">Finalizar</a>
        </p>
        <?php
        
            ?>
        </body>
    </div>
    </html>