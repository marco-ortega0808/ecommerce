<?php
    require 'validar-sesion-iniciada.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
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
        <div class="border-bottom mb-2">
            <div class="row mt-3">
                <div class="col-12">
                    <p class="text-center">
                        <span class="h3"><i class="fas fa-shopping-bag "> Compras realizadas </span></i>
                    </p>
                </div>
                
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mt-2">
                <table class="table text-center table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Unidad</th>
                        <th scope="col">Estado</th>
                        </tr>
                    </thead>
                </table>
        <?php
            require_once 'conbd.php';

            $query = $mbd -> prepare("SELECT * FROM compras");
            $query -> execute();
            $row = $query -> rowCount();
            
            $buy = $query -> fetch();
            if ($row >0 && $arry[0] == $buy[4]) {
                
            for ($i = 0; $i < $row;  $i++){
        ?>
            <table class="table text-center table ">
                    <tbody>
                        <tr>
                        <td ><img style="width: 115px;" src="<?php print $buy[3]?>" alt=""></td>
                        <td><?php print $buy[1]?></td>
                        <td>$<?php print $buy[2]?></td>
                        <td>1</td>
                        <td class="text-success"> Pagado</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php
            }
        }if ($row==0) {
            
            ?>  
            
            <div class="border-bottom mb-3">
                <p class="h4 text-center">Aún no tiene ninguna compra finalizada</p>
            </div>
            <?php
            }
            ?> 
            <p class="h4 mb-3">Productos que puedén ser de su interés</p>
        </div>
        <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-4 relleno relleno-r mb-3">
                        <div class="card">
                            <a href="produc-info.php">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="img/TarjetaG.jpg" class="img-fluid rounded-start" alt="GTX 1660">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">GTX 1660</h5>
                                            <p class="card-text text-dark">Una gran opción para que pueda juegar sin ningún problema.</p>
                                            <ul class="card-text text-dark">
                                                <li>6 nucleos</li>
                                                <li>12 hilos</li>
                                                <li>3.6GHz a 4.2GHz Boost</li>
                                                <li>4 Mb de cache</li>
                                            </ul>
                                            <p class="card-text"><small class="text-muted">¡Ya disponible!</small></p>
                                            </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 relleno mb-3">
                        <div class="card">
                            <a href="produc-info.php">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="img/procesador.jpg" class="img-fluid rounded-start" alt="Alcohol isopropilico">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Alcohol isopropilico</h5>
                                            <p class="card-text text-dark">Uno de los productos de limpiesa más necesarios.</p>
                                            <ul class="card-text text-dark">
                                                <li>6 nucleos</li>
                                                <li>12 hilos</li>
                                                <li>3.6GHz a 4.2GHz Boost</li>
                                                <li>4 Mb de cache</li>
                                            </ul>
                                            <p class="card-text"><small class="text-muted">¡Ya disponible!</small></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 relleno col-lg-4 relleno-l">
                        <div class="card mb-3">
                            <a href="produc-info.php">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="img/alcohol.jpg" class="img-fluid rounded-start" alt="Alcohol isopropilico">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Alcohol isopropilico</h5>
                                            <p class="card-text text-dark">Uno de los productos de limpiesa más necesarios.</p>
                                            <ul class="card-text text-dark">
                                                <li>6 nucleos</li>
                                                <li>12 hilos</li>
                                                <li>3.6GHz a 4.2GHz Boost</li>
                                                <li>4 Mb de cache</li>
                                            </ul>
                                            <p class="card-text"><small class="text-muted">¡Ya disponible!</small></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
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