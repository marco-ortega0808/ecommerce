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
        <script src="https://js.stripe.com/v3/"></script>
        <script src="js/client.js" defer></script>
</head>
<div class="container-fluid">
    <body>
        <?php
            require 'menu.php';
            require_once 'conbd.php';

            $query = $mbd -> prepare("SELECT * FROM carrito");
            $query -> execute();
            $row = $query -> rowCount();

            for ($i = 0; $i < $row;  $i++){
                $array = $query -> fetch();
        ?>
        <div class="container-fluid">
            <div class="row">
                <table class="table text-center table table-striped table-sm">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row"><?php print $array[0]?></th>
                        <td ><img style="width: 115px;" src="<?php print $array[3]?>" alt=""></td>
                        <td><?php print $array[1]?></td>
                        <td>$<?php print $array[2]?></td>
                        <td> <a class="btn btn-danger" href="delet-product.php?id=<?php print $array[0]?>"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    </tbody>
                </table>
                <?php
                    $respuesta = $_GET['query'];
                    print $respuesta;
                ?>
            </div>
        <?php
            }
        ?>  
            <div class="row justify-content-lg-end mb-3">
                <div class="card col-lg-4">
                    <h5 class="row card-header">Realice su pago</h5>
                    <div class=" row card-body">
                        <p class="col-6">Subtotal</p>
                        <p class="col-6">$ <?php print $array[2] ?></p>
                        <h5 class="card-title col-6">Total (IVA incluido)</h5>
                        <p class="col-6">$ <?php print $array[2]?></p>
                        <button class="btn btn-primary mt-2">Ir al siguiente paso</button>

                        <!-- Display a payment form 
                        <form id="payment-form">
                        <div id="payment-element">
                            
                        </div>
                        <button id="submit" class="btn btn-primary mt-2">
                            <div class="spinner hidden" id="spinner"></div>
                            <span id="button-text">Pagar ahora</span>
                        </button>
                        <div id="payment-message" class="hidden"></div>
                        </form>-->
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div class="row bg-dark">
            <div class="mx-auto mb-2 mt-2" style="width: 200px;">
                <span class="text-white">Copyrigft c 2004, JDA </span>
            </div>
        </div>
    </footer>
</div>
</html>