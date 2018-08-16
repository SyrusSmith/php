<?php

function validar($datos){
    if (trim($datos['nombre']) ==""){
        $errores['nombre'] = "El campo nombre es incorrecto.";
    }
    if (!is_numeric($datos['edad'])){
        $errores['edad'] = "La edad debe ser un número";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores['email'] = "Debe introducir un email válido";
    }

    return $errores;
}

?>