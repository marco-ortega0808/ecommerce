<?php
    require 'menu.php';
    require_once 'conbd.php';
    if (isset($_POST['price'])){
        $total = $_POST['total'];
        
        $query = $mbd->prepare("INSERT INTO pagos (monto) VALUES (:total)");
        $query -> bindValue(':total', $total);
        $query -> execute();
            print $total;
        header('location:direccion.php');

    }
?>