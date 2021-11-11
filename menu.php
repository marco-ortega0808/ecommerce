<?php
    session_start();
    $usuario = $_SESSION['usuario'];
?>
<header>
<div class="row bg-dark">
    <div class="col-3 col-md-8 col-lg-8"></div>
    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end justify-content-md-end">
        <ul class="mt-2 mb-2 sin-estilos">
            <?php
                $usuario = $_SESSION['usuario'];
                require 'conbd.php';
                
                $answer = $mbd -> prepare("SELECT * FROM registro WHERE email = :email");
                $answer -> bindParam(':email', $usuario);
                $answer -> execute();
                $arry = $answer->fetch();
                
                if ($arry[2] != null && $arry[2] != "") {
                ?>
                <li>
                    <a class="text-white" href="user.php"><i class="fas fa-user text-white"></i> <?php print $arry[1] ?></a>
                </li>
                <li class="ms-3">
                    <a class="text-white" href="compras.php">Compras</a>
                </li>
                <li class="ms-3">
                    <a class="text-white" href="close-sesion.php">Cerrar sesión</a>
                </li>        
            <?php
                }
                if ($usuario == ""){
            ?>
                <li class="ms-1">
                    <a class="text-white" href="registro.php">Registrarme</a>
                </li>
                <li class="ms-3">
                    <a class="text-white" href="iniciar-sesion.php"> Iniciar Sesión</a>
                </li>        
            <?php
                }
            ?>
        </ul>
    </div>
</div>
    
</header>
<nav class="row navbar navbar-expand-lg navbar-light bg-primary mb-1">
    <div class="container-fluid">
        <div class="col-lg-7">
            <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo.jpg" alt="Logo de prueba"></a>
        </div>
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
                    <a href="carrito.php" class="nav-link active text-center">
                        <i class="fas fa-shopping-cart"></i> <?php print $row;?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>