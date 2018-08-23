<?php

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

function validar($datos) {
    
    if (trim($datos['nombre']) == '') {
        $errores['nombre'] = "El nombre es obligatorio";
    }
    
    if (trim($datos['apellido']) == '') {
        $errores['apellido'] = "El apellido es obligatorio";
    }

    if(!is_numeric($datos['edad'])) {
        $errores['edad'] = "La edad debe ser numérica";
    }
    
    if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)){
        $errores['email'] = "Debe introducir un mail válido";
    }

return $errores;

}


?>