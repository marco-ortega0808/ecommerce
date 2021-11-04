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
                                <img src="img/procesador.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="img/procesa.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="img/proamd.jpg" class="d-block w-100" alt="...">
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
                                <h1 class="card-title text-center">Procesador AMD Ryzen 5 3600</h1>
                                <div class="card-body">
                                    <p>Boost / TDP 65W / Wraith Stealth (Requiere Tarjeta de Video) / 100-100000031BOX </p>
                                    <ul class="card-text text-dark">
                                        <li>Gráficos discretos memoria del adaptador: 6 GB</li>
                                        <li>Ancho de datos: 192 bit, Tipo de memoria: GDDR6</li>
                                        <li>Frecuencia Boost: 1860 MHz</li>
                                        <li>Tipo de interfaz: PCI Express x16 3.0</li>
                                        <li>HDMI: 1x, DVI-I: 0x, DisplayPort: 1x</li>
                                    </ul>
                                    <div class="card-texto">
                                        <h6 class="text-decoration-line-through">$8000</h6>
                                        <label for="preci">$7,500</label>
                                    </div>
                                </div>
                                <p class="card-text"><small class="text-muted">4 disponibles</small></p>
                                <a type="button" class="btn btn-primary mb-1" href="add-car.php?name=Procesador AMD Ryzen 5 3600&price=7500&img=img/procesador.jpg"><i class="fas fa-shopping-cart"></i> Agregar al carrito</a>
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