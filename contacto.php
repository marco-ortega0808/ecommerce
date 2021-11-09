<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleContac.css">
    <title>Contactos</title>
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
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="card mb-1 mt-2 col-sm-12 col-md-12 col-lg-6">
                        <div class="p-2">
                            <h5 class="titulo">Contáctanos</h5>
                            <div id="formularioconte">
                                <input type="name" class="form-control me-1" id="exampleFormControlInput1" placeholder="Nombre">
                                <input type="email" class="form-control ms-1" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <label for="exampleFormControlTextarea1" class="form-label mt-2">Escribenos</label>
                            <textarea class="form-control mb-1" style="max-height: 90% !important;" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <button type="button" class="btn btn-secondary mt-2">Enviar  <i class="far fa-paper-plane"></i></button>
                        </div>
                    </div>
                    <div class="mb-2 col-sm-12 col-md-12 col-lg-6">
                        <h2>ATENCIÓN A VENTAS EN LINEA</h2>
                        <div class="mt-2 conteicono">
                            <img class="conteimg" src="img/telefono.png" alt="">
                            <div class="text-conten">
                                <h3>Número de telefono</h3>
                                <p>56-20-41-48-45</p>
                            </div>
                        </div>
                        <div class="conteicono">
                            <img class="conteimg" src="img/correo.png" alt="">
                            <div class="text-conten">
                                <h3>Correo electrónico</h3>
                                <p>tecni@gmail.com</p>
                            </div>
                        </div>
                        <div class="conteicono">
                            <img class="conteimg" src="img/iconoubica.png" alt="">
                            <div class="text-conten">
                                <h3>Ubicación</h3>
                                <p>Av. palomas #567 CDMX</p>
                            </div>
                        </div>
                        <div class="conte-mas-info">
                            <h3>Horarios de atención</h3>                         
                            <p>Lunes - Viernes: 10:00am - 7:00pm</p>
                        </div>
                        <div class="conte-mas-info">
                            <h3></h3>
                            <img class="redes-icono" src="img/iconoyouto.png" alt="">
                            <img class="redes-icono" src="img/iconowhatsapp.png" alt="">
                            <img class="redes-icono" src="img/iconoface.png" alt="">                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
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