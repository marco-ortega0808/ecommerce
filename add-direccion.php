<?php
    require 'menu.php';
    require_once 'conbd.php';
    if (isset($_POST['direccion'])){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $cel = $_POST['cel'];
        $calle = $_POST['calle'];
        $colonia = $_POST['colonia'];
        $cp = $_POST['cp'];
        $ciudad = $_POST['ciudad'];
        $estado = $_POST['estado'];
        $referencia = $_POST['referencia'];
        $id = $arry[0];
        print var_dump($id);
        if ($name == null || $lastname == null || $cel == null || $calle == null || $colonia == null || $cp == null || $ciudad == null || $estado == null || $referencia == null) { 
            
        header('location:direccion.php?add=Es necesario que llene todos los campos');

    }else {
        
            $query = $mbd->prepare("INSERT INTO direccion (name, lastname, tel, calle, colonia, cp, ciudad, estado, referencia, idUser) VALUES (:name, :lastname, :cel, :calle, :colonia, :cp, :ciudad, :estado, :referencia, :id)");
            $query -> bindValue(':name', $name);
            $query -> bindValue(':lastname', $lastname);
            $query -> bindValue(':cel', $cel);
            $query -> bindValue(':calle', $calle);
            $query -> bindValue(':colonia', $colonia);
            $query -> bindValue(':cp', $cp);
            $query -> bindValue(':ciudad', $ciudad);
            $query -> bindValue(':estado', $estado);
            $query -> bindValue(':referencia', $referencia);
            $query -> bindValue(':id', $id);
            $query -> execute();

            header('location: pago.php');
    }
}
