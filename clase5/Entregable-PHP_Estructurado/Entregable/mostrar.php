<?php 
    // if($_POST){
    //     var_dump($_POST);
    // }

    $sueldoBruto = $_POST['sueldo_bruto'];
    $descJub = 0.11;
    $descObSoc = 0.03;
    $sueldoNeto = 0;
    $retGan = 0.2;

    
    // PARTE D
    if($_POST){

        // PARTE B
        function descuentoJubilacion(){
            global $sueldoBruto, $descJub;
            
            $descJub = $sueldoBruto*$descJub;

            return $descJub;
        }

        // PARTE C
        function descuentoObraSocial(){
            global $sueldoBruto, $descObSoc;

            $descObSoc = $sueldoBruto*$descObSoc;

            return $descObSoc;
        }
    };

    descuentoJubilacion($sueldoBruto, $descJub);
    // echo $descJub;
    // echo '<br>';

    descuentoObraSocial($sueldoBruto, $descObSoc);
    // echo $descObSoc;
    // echo '<br>';


    // PARTE E
    $sueldoNeto = $sueldoBruto-($descJub+$descObSoc);

    if ($sueldoNeto > 35000){
        function retencionGanancias(){
            global $sueldoNeto, $retGan;

            $retGan = $sueldoNeto*$retGan;
            $sueldoNeto = $sueldoNeto-$retGan;

            return $sueldoNeto;
        }
    }

    retencionGanancias($sueldoNeto, $retGan);
    // echo $sueldoNeto;
    // echo '<br>';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio integrador 1 - Perfil creado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .spacer {
            padding-top: 15px;
            padding-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        
    </div>
</body>
</html>