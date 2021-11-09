<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleContac.css">
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Registro</title>
</head>
<div class="container-fluid">
    <body>
        <div id="contenedor">
            <?php
                require 'menu.php';
            ?>
        </div>
        <section>    
            <div class="mx-auto mb-2 mt-2 col-sm-12 col-md-12 col-lg-6" style="margin: 125px auto !important;">
                        <div class="card p-3">      
                            <h5 class="titulo mt-3">Crea una nueva cuenta</h5>
                            <div id="formulariocone">  
                                <input class="form-control me-1 " type="text" name="usuario" value="" placeholder=" Nombre de Usuario">
                                <input class="form-control me-1 mt-3" type="text" name="usuario" value="" placeholder="Correo Electrónico">
                                <input class="form-control me-1 mt-3" type="password" name="contrasena" value="" placeholder="contrasena">
                                <input class="form-control me-1 mt-3" type="password" name="contrasena" value="" placeholder=" verifica contrasena">
                                <button type="button" class="btn btn-secondary mt-2">Enviar  <i class="far fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <footer>
        <div class="row bg-dark">       
            <div  class="mx-auto mb-2 mt-2" style="width: 200px;">
                <p class="text-white">Copyrigft c 2004, JDA </p>
            </div>
        </div>
    </footer>
</div>
</html>