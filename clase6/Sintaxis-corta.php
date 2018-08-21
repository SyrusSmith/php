<?php

$nombre = 'Juan';
$edad = 17;

$nombres = ['Nahuel', 'Lihué', 'Di Biase'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <?php if($edad > 18): ?>
        <h2>Hola <?php echo $nombre ?> mayor!</h2>
    <?php else: ?>
        <h2>Hola <?php echo $nombre ?> menor!</h2>
    <?php endif; ?>

    <?php foreach ($nombres as $nombres): ?>
        <h3>Hola <?php echo $nombres ?> </h3>
    <?php endforeach; ?>

    

</body>
</html>