<?php
    try {
        $user = "root";
        $password = "marco9908";   
        $mbd = new PDO('mysql:host=localhost;dbname=e-commerce', $user, $password);
        
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>
