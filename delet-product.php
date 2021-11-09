<?php
      $id = $_GET['id'];
      require_once 'conbd.php';
      $query = $mbd -> prepare("DELETE FROM carrito WHERE id = :id ");
      
      $query -> bindValue(':id', $id);
  
      $query->execute();
  
      header('location:carrito.php?query=Producto eliminado');
?>