
<?php 
    require 'menu.php';
    require 'conbd.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    $produc = $mbd -> prepare("SELECT * FROM carrito");
    $produc -> execute();
    $id = $produc->fetch();
     print var_dump($id);
    $user = $arry[0];
    $stausPay = $_GET['redirect_status'];
    $idPay = $_GET['payment_intent'];
    print $stausPay;
    print $idPay;

    if ($stausPay == "succeeded") {

        $answer = $mbd->prepare("INSERT INTO compras (name, price, img, idUser) VALUES (:nombre, :precio, :imagen, :user)");
        $answer -> bindValue(':nombre', $id[1]);
        $answer -> bindValue(':precio', $id[2]);
        $answer -> bindValue(':imagen', $id[3]);
        $answer -> bindValue(':user', $user);
        $answer -> execute();

        $query = $mbd -> prepare("DELETE FROM carrito WHERE id = :id ");
        
        $query -> bindValue(':id', $id[0]);

        $query->execute();
        require ('PHPMailer/src/Exception.php');
        require ('PHPMailer/src/PHPMailer.php');
        require ('PHPMailer/src/SMTP.php');
                
        header('location:confirmacion-pgo.php?exito='.$stausPay);
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();                  
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'marcoantoniot089@gmail.com';
            $mail->Password   = 'marcoT0899P';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('marcoantoniot089@gmail.com', 'teckno-productos');
            $mail->addAddress($usuario);
            $mail->addReplyTo('marcoantoniot089@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'Gracias por realizar su compra';
            $mail->Body = "<p style='text-align: center;'> <h1>Gracias por realizar su compra</h1>
            <h2>Producto que compro</h2> 
            <img style='height: 150px'; src='https://m.media-amazon.com/images/I/71WPGXQLcLL._AC_SL1384_.jpg' 
            <ul>
            <li>Gráficos discretos memoria del adaptador: 6 GB</li>
            <li>Ancho de datos: 192 bit, Tipo de memoria: GDDR6</li>
            <li>Frecuencia Boost: 1860 MHz</li>
            <li>Tipo de interfaz: PCI Express x16 3.0</li>
            <li>HDMI: 1x, DVI-I: 0x, DisplayPort: 1x</li>
            </ul> 
            <label>Precio: $7,500</label><br>
            <p>En caso de aclaraciones sobre su pago le proporcionamos su ID de pago: ".$idPay."<p>
            <a href='http://teckno-productos.test/compras.php'>Lista de productos comprados</a>
            </p>";
            $mail->send();
            
        }
        catch(Exception $e){
        }
    }else{
        header('location:status-pago.php?exito='.$stausPay);
    }
        
?> 