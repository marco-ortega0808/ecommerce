<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesador</title>
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
            $id = $_GET['id'];
            $productoSelect = $mbd -> prepare("SELECT * FROM producto WHERE id = :id");
            $productoSelect -> bindParam(':id', $id);
            $productoSelect -> execute();
            $option = $productoSelect->fetch();
        ?>
        <section>
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-5 mt-2">
                    <div>
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="<?php print $option[10]; ?>" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="<?php print $option[12]; ?>" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="<?php print $option[13]; ?>" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-7 col-lg-7">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h1 class="card-title text-center"><?php print $option[1]; ?></h1>
                                <div class="card-body">
                                    <p><?php print $option[3]; ?></p>
                                    <ul class="card-text text-dark">
                                        <li><?php print $option[4] ?></li>
                                        <li><?php print $option[5] ?></li>
                                        <li><?php print $option[6] ?></li>
                                        <li><?php print $option[7] ?></li>
                                        <li><?php print $option[8] ?></li>
                                    </ul>
                                    <div class="card-texto">
                                        <h6 class="text-decoration-line-through">$<?php print $option[9] ?></h6>
                                        <label for="preci">
                                            $<?php print $option[2]; ?>
                                        </label>
                                    </div>
                                </div>
                                <?php if ($option[11] >= 2){ ?>
                                    <p class="card-text"><small class="text-muted"><?php print $option[11] ?> disponibles</small></p>
                                    <form action="add-car.php" method="post">
                                        <input type="text" name="id" value="<?php print $id ?>" style="display: none;">
                                        <input type="text" name="name" value="<?php print $option[1]; ?>" style="display: none;">
                                        <input type="text" name="img" value="<?php print $option[10]; ?>" style="display: none;">
                                        <input type="text" name="price" value="<?php print $option[2]; ?>" style="display: none;">
                                        <button type="submit" name="sesion" class="btn btn-primary mb-1"><i class="fas fa-shopping-cart"></i> Agregar al carrito</button>
                                    </form>
                                <?php } if ($option[11] == 1){ ?>
                                    <p class="card-text"><small class="text-muted"><?php print $option[11] ?> disponible</small></p>
                                    <form action="add-car.php" method="post">
                                        <input type="text" name="id" value="<?php print $id ?>" style="display: none;">
                                        <input type="text" name="name" value="<?php print $option[1]; ?>" style="display: none;">
                                        <input type="text" name="img" value="<?php print $option[10]; ?>" style="display: none;">
                                        <input type="text" name="price" value="<?php print $option[2]; ?>" style="display: none;">
                                        <button type="submit" name="sesion" class="btn btn-primary mb-1"><i class="fas fa-shopping-cart"></i> Agregar al carrito</button>
                                    </form>
                                <?php } if ($option[11] == 0){ ?>
                                    <p class="card-text"><small class="text-muted">¡Por el momento no se encuentra disponible!</small></p>
                                    <script> window.alert("Este producto no esta disponible"); swal("Oops!", "Something went wrong on the page!", "error");</script>
                                    
                                    </form>
                                <?php } ?>
                                <?php
                                    $query = $_GET['query'];
                                    print $query;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 card p-2 mb-3">        
                        <div class="mb-3">
                            <h5 class="text-center">Contáctanos</h5>
                            <label for="exampleFormControlInput1" class="form-label">Correo eléctronico</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Escribenos</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                          <button type="button" class="btn btn-secondary">Enviar  <i class="far fa-paper-plane"></i></button>
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