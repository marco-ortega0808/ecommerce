<header>
<div class="row bg-dark">
    <div class="col-3 col-md-9 col-lg-10"></div>
    <div class="col-lg-2 d-flex justify-content-center justify-content-lg-end justify-content-md-end">
        <ul class="mt-2 mb-2 sin-estilos">
            <li class="ms-1">
                <a class="text-white" href="registro.php">Registrarme</a>
            </li>
            <li class="ms-3">
                <a class="text-white" href="iniciar-sesion.php"> Iniciar Sesión</a>
            </li>                                                  
        </ul>
    </div>
</div>
    
</header>
<nav class="row navbar navbar-expand-lg navbar-light bg-primary mb-1">
    <div class="container-fluid">
        <a class="navbar-brand col-lg-7" href="index.php"><img class="logo" src="img/logo.jpg" alt="Logo de prueba"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-lg-3 justify-content-lg-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-center" aria-current="page" href="productos.php">Productos y Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-center" aria-current="page" href="contacto.php">Contáctanos</a>
                </li>
                <li class="nav-item">
                    <?php
                        require_once 'conbd.php';
                        $query = $mbd -> prepare("SELECT * FROM carrito");
                        $query -> execute();
                        $row = $query -> rowCount();
                    ?>
                        <span>  </span>
                    <a href="carrito.php">
                        <i aria-current="page" class="fas fa-shopping-cart nav-link active text-center" > <?php print $row;?></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>