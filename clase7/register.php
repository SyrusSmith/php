<?PHP

    include_once('validacion.php');

    // $errores= [];

    // if($_POST){
    //     $errores = validar($_POST);
    // }

$nombre = "";
$edad = "";
$user = "";
$errores = "";

if ($_POST){
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $errores = validar($_POST);

    if (count($errores) == 0){
        header('location: confirmacion.php');
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
                <!-- <input type='text' class='spmhidip' name='' /> -->
                <br>

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='nombre' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'><?php  ?></span>
                </div>
                <div class='container'>
                    <label for='edad' >Edad:</label><br/>
                    <input type='text' name='edad' id='edad' value='edad' maxlength="50" /><br/>
                    <span id='register_edad_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >e-Mail:</label><br/>
                    <input type='text' name='email' id='email' value='email' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
