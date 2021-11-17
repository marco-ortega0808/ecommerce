<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
        <!--Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/client.js" defer></script>
        <!-- <script src="js/validacion-from.js" defer></script> -->
</head>
<div class="container-fluid">
    <body>
        <?php
            require 'menu.php';
        ?>
        <div class="border-bottom">
            <div class="row mt-3">
                <div class="col-12">
                    <p class="text-center">
                        <span class="h3"><i class="fas fa-shopping-cart"> Carrito </span></i>
                    </p>
                </div>
            </div>
        </div>
<div class="container-fluid">
        <div class="row mt-2">
            <table class="table text-center table table-striped table-sm table-lx">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>

                <?php
                    require_once 'conbd.php';

                    $query = $mbd -> prepare("SELECT * FROM carrito");
                    $query -> execute();
                    $row = $query -> rowCount();

                    if ($row>0) {
                    for ($i = 0; $i < $row;  $i++){
                        $array = $query -> fetch();
                        $total += $array[2];
                ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php print $array[0]?></th>
                            <td ><img style="width: 115px;" src="<?php print $array[3]?>" alt=""></td>
                            <td><?php print $array[1]?></td>
                            <td>$<?php print $array[2]?></td>
                            <td> 
                                <a class="btn btn-danger" href="delet-product.php?id=<?php print $array[0]?>"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                <?php
            }
                    $respuesta = $_GET['query'];
                    print $respuesta;
                ?>
                </table>
            </div>
                <!-- Chekout -->
                <div class="row justify-content-lg-end mb-3">
                    <div class="card col-lg-3">
                        <h5 class="row card-header">Ingrese su cupón</h5>
                        <div class=" row card-body">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                document.getElementById("descuento").addEventListener('submit', validarFormulario); 
                                });
                                function validarFormulario(evento) {
                                evento.preventDefault();
                                var cupon = document.getElementById('cupon').value;
                                if(cupon.length == 0) {
                                    alert('Ingrese cupón');
                                    return;
                                }
                                this.submit();
                                
                                }
                            </script>
                            <form action="carrito.php" method="post" id="descuento">
                                <input type="text" name="cupon" id="cupon" class="col-12 mt-2" placeholder="Ejem: Des-20-const">
                                <button type="submit" name="cupones" id="btn-envio" class="btn btn-primary mt-2 col-12">Ingresar</button>
                                <div id="aviso"></div>
                                <?php
                                    $res = $_GET['error'];
                                    print $res;
                                    ?>
                            </form>
                        </div>
                    </div>
                    <div class="card  col-lg-4">
                        <h5 class="row card-header">Realice su pago</h5>
                        <div class=" row card-body">
                            <table class="text-center">
                                <tr>
                                    <td>Subtotal</td>
                                    <td>$ <?php print $total ?>
                                    </td>
                                </tr>
                                <?php
                                if (isset($_POST['cupones'])){
                                    $cupon = $_POST['cupon'];
                                    print $cupon;
                                    $resultadoCupon = $mbd -> prepare("SELECT * FROM cupones WHERE codigo = :cupon");
                                    $resultadoCupon -> bindParam(':cupon', $cupon);
                                    $resultadoCupon -> execute();
                                    $cuenta = $resultadoCupon-> rowCount();
                                    $arreglo = $resultadoCupon->fetch();
                                    
                                    if($cuenta == 0){
                                        header('location:carrito.php?error=Cupon invalido');
                                    }else{
                                    if($arreglo[1] == $arreglo[1]){

                                ?>
                                <tr class="mt-2">
                                    <td><spam class="h6 ">Descuent del <?php print $arreglo[3] ?>%</spam></td>
                                    <td>$ <?php 
                                        $descuento = $total * $arreglo[2];
                                        print $descuento;
                                        $total = $total - $descuento; 
                                        ?>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    }
                                }
                                ?>

                                <tr class="mt-2">
                                    <td><spam class="h6 ">Total (IVA incluido)</spam></td>
                                    <td>$ <?php print $total ?></td>
                                </tr>
                            </table>
                            <?php if($arry[0] == 0){ ?>
                            <a class="btn btn-primary mt-2" href="direccion.php?pasos=1">Ir al siguiente paso</a>
                            <?php } if($arry[0] >= 1){ ?>
                                <form action="add-pago.php" method="post">
                                    <input type="text" style="display:none;" name="total" value="<?php print $total ?>"> 
                                    <button type="submit" name="price" class="btn btn-primary mt-2 col-12">Ir al siguiente paso </button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
        <?php
            }
        if ($row==0) {
            
        ?>  
        
        </table>
            </div>
        
        <div class="border-bottom mb-3">
            <p class="h4 text-center">Aún no tiene nada en el carrito</p>
        </div>
        <?php
        }
        ?>

        <p class="h4">Productos que puedén ser de su interés</p>
        
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
        </div>
    </footer>
</div>
</html>