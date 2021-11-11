<?php
 require 'validar-sesion-iniciada.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pago</title>
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/client.js" defer></script>
</head>
<div class="container-fluid">
    <body>
        <?php
            require 'menu.php';
        ?>
        <div>
            <div class="border-bottom mb-3">
                <div class="row mt-3">
                    <div class="col-lg-3">
                        <i class="fas fa-shopping-cart"><span> Carrito </span></i>
                    </div>
                    <div class="col-lg-3">
                        <a href="direccion.php"><p class="h5 text-black">1. Dirección</p></a>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-warning h5">2. Pago</p>
                    </div>
                    <div class="col-lg-3">
                        <p class=" h5">3. Confirmacion de pago</p>
                    </div>
                </div>
            </div>
            
            <form id="payment-form">
            <div id="payment-element">
                
            </div>
            <button id="submit" class="btn btn-primary mt-2">
                <div class="spinner hidden" id="spinner"></div>
                <span id="button-text">Pagar ahora</span>
            </button>
            <div id="payment-message" class="hidden"></div>
            </form>
        </div>
    </body>
</div>