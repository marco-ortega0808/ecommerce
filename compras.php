<?php
    require 'validar-sesion.php'
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
        <?php
            require_once 'conbd.php';
            $user = $arry[0];
            
            $query = $mbd -> prepare("SELECT * FROM compras WHERE idUser = :id");
            $query -> bindParam(':id', $user);
            $query -> execute();
            $row = $query -> rowCount();
            
            for ($i = 0; $i < $row;  $i++){
            $buy = $query -> fetch();
                if ($row > 0 && $arry[0] == $buy[4]) {
        ?>
                <tbody>
                    <tr>
                    <td ><img style="width: 115px;" src="<?php print $buy[3]?>" alt=""></td>
                    <td><?php print $buy[1]?></td>
                    <td>$<?php print $buy[2]?></td>
                    <td>1</td>
                    <td class="text-success"> Pagado</td>
                    </tr>
                </tbody>
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

</table></div>
            <p class="h4 mb-3">Productos que puedén ser de su interés</p>
        
        <!-- <div class="container-fluid"> -->
                <div class="row">
                    
                <?php
                        $product = $mbd -> prepare("SELECT * FROM producto ORDER BY name DESC");
                        $product -> execute();
                        for ($i=0; $i < 3; $i++) { 
                        $productoSelec = $product->fetch();
                    ?>
                    <div class="col-sm-12 col-lg-4 relleno mb-3 card">
                        <div class="p-2">
                            <a href="produc-info.php?id=<?php print $productoSelec[0] ?>" >
                                <div class="row g-0">
                                    
                                    <div class="col-md-4">
                                        <img src="<?php print $productoSelec[10] ?> " class="img-fluid rounded-start" alt="GTX 1660">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php print $productoSelec[1] ?> </h5>
                                            <p class="card-text text-dark"><?php print $productoSelec[3] ?> </p>
                                            <ul class="card-text text-dark">
                                                <li><?php print $productoSelec[5] ?> </li>
                                                <li><?php print $productoSelec[6] ?> </li>
                                                <li><?php print $productoSelec[7] ?> </li>
                                                <li><?php print $productoSelec[8] ?> </li>
                                            </ul>
                                        </div>
                                        <p class="card-text"><small class="text-muted"><?php print $productoSelec[11] ?> diponibles</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
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