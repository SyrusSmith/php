<?PHP

    include_once('validacion.php');

    // $errores= [];

    // if($_POST){
    //     $errores = validar($_POST);
    // }

$nombre = "";
$edad = "";
$user = "";
$errores = [];

if ($_POST){
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $errores = validar($_POST);

    if (count($errores) == 0){
        header('location: confirmacion.php');
        exit;
    }
}

    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='validacion.php' method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                <br>

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label>
                    <br>
                    <input type='text' name='nombre' id='name' value='<?php echo $nombre ?>' maxlength="50" />
                    <br>
                    <?php if(isset($errores['nombre'])) { ?>
                    <span ><?php echo "<br>" . $errores['nombre']; ?></span>
                    <?php } ?>
                </div>
                <br>
                <div class='container'>
                    <label for='edad' >Edad:</label>
                    <br>
                    <input type='text' name='edad' id='edad' value='<?php echo $edad ?>' maxlength="50" />
                    <br>
                    <?php if(isset($errores['edad'])) { ?>
                    <span ><?php echo "<br>" . $errores['edad']; ?></span>
                    <?php } ?>
                </div>
                <br>
                <div class='container'>
                    <label for='email' >e-Mail:</label>
                    <br>
                    <input type='text' name='email' id='email' value='<?php echo $email ?>' maxlength="50" />
                    <br>
                    <?php if(isset($errores['email'])) { ?>
                    <span ><?php echo "<br>" . $errores['email']; ?></span>
                    <?php } ?>
                </div>
                <br>
                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
