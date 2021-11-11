<?php
    require 'validar-sesion-iniciada.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<div class="container-fluid">
<?php
            require 'menu.php';
            $id = $arry[0];
            
            $repuesta = $mbd -> prepare("SELECT * FROM direccion WHERE idUser = :id");
            $repuesta -> bindParam(':id', $id);
            $repuesta -> execute();
            $igual = $repuesta -> fetch();
        ?>
    <body>
    <div class="border-bottom mb-3">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <p class="text-center h2">
                        <i class="fas fa-users-cog"><span> Actualizar datos </span></i>
                    </p>
                </div>
            </div>
        </div>
        <?php
            $id = $arry[0];
            
            $repuesta = $mbd -> prepare("SELECT * FROM direccion WHERE idUser = :id");
            $repuesta -> bindParam(':id', $id);
            $repuesta -> execute();
            $igual = $repuesta -> fetch();
            
            if ($igual[10] == $arry[0]) {
            
        ?>
        <form class="card mt-3 mb-3" action="update-direccion.php" method="post">
            <div class="row p-3">
                    <input style="display: none;" name="id" value="<?php print $igual[0]?>">
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="name" name="name" value="<?php print $igual[1]?>">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="lastname" name="lastname" value="<?php print $igual[2]?>">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="tel" name="cel" value="<?php print $igual[3]?>">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="text" name="calle" value="<?php print $igual[4]?>">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="text" name="colonia" value="<?php print $igual[5]?>">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="text" name="cp" value="<?php print $igual[6]?>">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="text" name="ciudad" value="<?php print $igual[7]?>">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="text" name="estado" value="<?php print $igual[8]?>">
                </div>
                <div class="mb-3">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="text" name="referencia" value="<?php print $igual[9]?>">
                </div>
                <div class="col-12">
                    <button type="submit" name="actualiza" class="btn btn-primary mt-2">Guardar Dirección<i class="far fa-paper-plane"></i></button>
                </div>
            </div>
        </form>
            <?php
                }if ($igual[10] != $arry[0]) {
            ?>
        <form class="card mt-3 mb-3" action="add-direccion.php" method="post">
             <div class="row p-3">
                <div class="mb-3 col-lg-6"> 
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="name" name="name" placeholder="Nombre destinatario *">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="lastname" name="lastname" placeholder="Apellidos destinatario *">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="tel" name="cel" placeholder="Telefono *">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="text" name="calle" placeholder="calle *">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="text" name="colonia" placeholder="Colonia *">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="text" name="cp" placeholder="CP *">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="text" name="ciudad" placeholder="Ciudad *">
                </div>
                <div class="mb-3 col-lg-6">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="text" name="estado" placeholder="Estado *">
                </div>
                <div class="mb-3">
                    <input class="form-control mt-2" id="exampleFormControlInput1" type="text" name="referencia" placeholder="Referencia *">
                </div>
                <div class="col-12">
                    <button type="submit" name="direccion" class="btn btn-primary mt-2">Actualizar dirección<i class="far fa-paper-plane"></i></button>
                </div>
            <span class="mt-2">
            <?php
            $add = $_GET['add'];
            print $add;
            ?></span>
            </div>
        </form>
        <?php } ?>
    </body>
</div>
</html>