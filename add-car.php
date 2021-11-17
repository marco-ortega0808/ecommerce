<?php
    require_once 'conbd.php';
    if ('name') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $img = $_POST['img'];
        $answer = $mbd->prepare("INSERT INTO carrito (name, price, img, idProduc) VALUES (:nombre, :precio, :imagen, :idProduc)");
        $answer -> bindValue(':nombre', $name);
        $answer -> bindValue(':precio', $price);
        $answer -> bindValue(':imagen', $img);
        $answer -> bindValue(':idProduc', $id);
        $answer -> execute();
        $repuesta = "Producto agregado";
        header('location:produc-info.php?query='.$repuesta.'&id='.$id);
    }
    else{
        print "Error";
    }
?>