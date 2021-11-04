<?php
    require_once 'conbd.php';
    if ('name') {
        $name = $_GET['name'];
        $price = $_GET['price'];
        $img = $_GET['img'];
        $answer = $mbd->prepare("INSERT INTO carrito (name, price, img) VALUES (:nombre, :precio, :imagen)");
        $answer -> bindValue(':nombre', $name);
        $answer -> bindValue(':precio', $price);
        $answer -> bindValue(':imagen', $img);
        $answer -> execute();
        $repuesta = "Producto agregado";
        header('location:produc-info.php?query='.$repuesta);
    }
    else{
        print "Error";
    }
?>