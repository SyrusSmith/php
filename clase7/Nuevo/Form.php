<?php

include_once('validaciones.php');

$errores = [];
$nombre = '';
$apellido = '';
$edad = '';
$email = '';

if ($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    
    $errores = validar($_POST);

    if(count($errores) == 0){
        header('Location: confirmacion.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="POST">
            <label for="nombre">Nombre</label>
            <br>
            <input type="text" name="nombre" value="<?php echo $nombre ?>" placeholder="Nombre"/>
            <?php if(isset($errores['nombre'])) { ?>
                <span><?php echo "<br>" . $errores['nombre'] ?></span>
            <?php } ?>
            <br>
            <br>
            
            <label for="apellido">Apellido</label>
            <br>
            <input type="text" name="apellido" value="<?php echo $apellido ?>" placeholder="Apellido">
            <?php if(isset($errores['apellido'])) { ?>
                <span><?php echo "<br>" . $errores['apellido'] ?></span>
            <?php } ?>
            <br>
            <br>
            
            <label for="edad">Edad</label>
            <br>
            <input type="text" name="edad" value="<?php echo $edad ?>" placeholder="Edad">
            <?php if(isset($errores['edad'])) { ?>
                <span><?php echo "<br>" . $errores['edad'] ?></span>
            <?php } ?>
            <br>
            <br>
            
            <label for="email">e-Mail</label>
            <br>
            <input type="email" name="email" value="<?php echo $email ?>" placeholder="e-Mail">
            <?php if(isset($errores['email'])) { ?>
                <span><?php echo "<br>" . $errores['email'] ?></span>
            <?php } ?>

            <br>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </body>
</html>