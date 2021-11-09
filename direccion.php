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
        <div>
            <div class="row border-bottom mt-3">
                <div class="col-lg-3">
                    <i class="fas fa-shopping-cart"><span> Carrito </span></i>
                </div>
                <div class="col-lg-3">
                    <p class="text-warning h5">1. Dirección</p>
                </div>
                <div class="col-lg-3">
                    <p class=" h5">2. Pago</p>
                </div>
                <div class="col-lg-3">
                    <p class=" h5">3. Confirmacion de pago</p>
                </div>
            </div>
        </div>
        <form class="card mt-2 mb-3">
            <div class="row p-3">
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputEmail1" class="form-label">Nombre destinatario:</label>
                    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputEmail1" class="form-label">Apellido destinatario:</label>
                    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputPassword1" class="form-label">Teléfono / Celular: </label>
                    <input type="tel" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputPassword1" class="form-label">Calle: </label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputPassword1" class="form-label">Colinia: </label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputPassword1" class="form-label">CP: </label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputPassword1" class="form-label">Ciudad: </label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="exampleInputPassword1" class="form-label">Estado: </label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Referencia: </label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-12">
                    <a type="submit" class="btn btn-primary" href="pago.php">Siguiente</a>
                </div>
            </div>
        </form>
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