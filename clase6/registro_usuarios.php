<?php

$nombre = '';
$apellido = '';

if($_GET):
    header("location: confirmacion.php");
    exit;
endif;

?>

<form action="" method="get">
    <fieldset>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email">
        <br>
        <input type="submit">
        <input type="reset">
    </fieldset>
</form>