<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleProduc.css">
    <title>Productos</title>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-3 rellenoCero mt-2 mb-2">
                        <div id="titulo">
                            <h2 style="color: #ffffff; text-align: center;">Catalogo</h2>
                        </div>
                        <div class="catalogo">
                                <img class="icono" src="img/computo.png" alt="">
                            <p class="fs-5 d-flex align-items-center">Cómputo (Hardware)</p>
                        </div>
                        <div class="catalogo">
                                <img class="icono" src="img/consumibles.png" alt="">
                            <p class="fs-5 d-flex align-items-center">Consumibles</p>
                        </div>
                        <div class="catalogo">
                                <img class="icono" src="img/servicios.png" alt="">
                            <p class="fs-5 d-flex align-items-center">Servicios</p>
                        </div>
                    </div>
                    <div class="col-ms-12 col-md-8 col-lg-9">
                        <div class="">
                            <div class="row">
                                <div class="col-sm-12 col-lg-12 col-md-12 relleno mb-3">
                                    <h1 class="titulo-productos border-bottom border-3 border-secondary row-sm mt-1">Hardware</h1>
                                    <div class="card">
                                        <a href="produc-info.php">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="img/TarjetaG.jpg" class="img-fluid rounded-start" alt="GTX 1660">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">GTX 1660</h5>
                                                        <div class="card-body">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12 col-md-12 relleno mb-3">
                                    <div class="card">
                                        <a href="produc-info.php">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="img/procesador.jpg" class="img-fluid rounded-start" alt="Alcohol isopropilico">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Ryzen 5600G</h5>
                                                        <div class="card-body">
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
                                                        <p class="card-text"><small class="text-muted">5 disponibles</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 relleno col-lg-12 col-md-12">
                                    <div class="card mb-3">
                                        <a href="produc-info.php">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="img/ram.jpg" class="img-fluid rounded-start" alt="Alcohol isopropilico">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Memoria RAM XPG Spectrix D60G RGB Tungsten Grey DDR4</h5>
                                                        <div class="card-body">
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
                                                        <p class="card-text"><small class="text-muted">50 disponibles</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="row">
                                <div class="col-sm-12 col-lg-12 col-md-12 relleno mb-3">
                                    <h1 class="titulo-productos border-bottom border-3 border-secondary mt-1">Consumibles</h1>
                                    <div class="card">
                                        <a href="produc-info.php">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="img/pasta.jpg" class="img-fluid rounded-start" alt="GTX 1660">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Pasta térmica</h5>
                                                        <div class="card-body">
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
                                                        <p class="card-text"><small class="text-muted">10 disponibles</small></p>
                                                        </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12 col-md-12 relleno mb-3">
                                    <div class="card">
                                        <a href="produc-info.php">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="img/aire.jpg" class="img-fluid rounded-start" alt="Alcohol isopropilico">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Aire comprimido</h5>
                                                        <div class="card-body">
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
                                                        <p class="card-text"><small class="text-muted">15 disponibles</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 relleno col-lg-12 col-md-12">
                                    <div class="card mb-3">
                                        <a href="produc-info.php">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="img/alcohol.jpg" class="img-fluid rounded-start" alt="Alcohol isopropilico">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Alcohol isopropilico</h5>
                                                        <div class="card-body">
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
                                                        <p class="card-text"><small class="text-muted">2 disponibles</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="row">
                                <div class="col-sm-12 col-lg-12 col-md-12 relleno mb-3">
                                    <h1 class="titulo-productos border-bottom border-3 border-secondary mt-1">Servicios</h1>
                                    <div class="card">
                                        <a href="produc-info.php">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="img/correctivo.jpg" class="img-fluid rounded-start" alt="GTX 1660">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Mantenimiento correctivo</h5>
                                                        <div class="card-body">
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
                                                        <p class="card-text"><small class="text-muted">¡Ya disponible!</small></p>
                                                        </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12 col-md-12 relleno mb-3">
                                    <div class="card">
                                        <a href="produc-info.php">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="img/mpreventivo.jpg" class="img-fluid rounded-start" alt="Alcohol isopropilico">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Mantenimiento preventivo</h5>
                                                        <div class="card-body">
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
                                                        <p class="card-text"><small class="text-muted">¡Ya disponible!</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
</html>