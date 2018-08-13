<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP embebido en HTML + Manejo de Funciones</title>
  <!--Aquí llamo al programa libreria que continene
  mis funciones-->
  <?php require_once 'php/libreria.php'?>
  <link rel= "stylesheet" href ="css/master.css">

</head>
<body>
  <p class="php">
  <?php 
  print "Hola amigos";
  ?>
  </p>
    
  <?php $sumar = sumar(10,20);

   ?>
  <p class="php"><?php echo $sumar?></p>
  
  <!--Sólo de prueba aquí puede mandar a buscar: andres - gonzalo 
      polito - rodo -daniel -->
  <div class="fotos">
  <p class="php">Bienvenido a Digital House</p>
  <?php $usuario = buscar("rodo"); ?>
  <?php if($usuario == 0){?>
    <img src="img/andres.png">     
  <?php }elseif($usuario == 1){?>
    <img src="img/gonzalo.jpg"> 
  <?php }elseif($usuario == 2){?>
    <img src="img/polito.png">   
  <?php }elseif($usuario == 3){?>
    <img src="img/rodo.jpg">       
  <?php }elseif($usuario == 4){?>
    <img src="img/daniel.jpg"> <?php }?>  
  </div>
  <br>
  <br>
  <!--Aquí estoy validando el usuario-->
  <p class="php">
  <?php 
  //Cambie el dato de la variable $usuario
  //para que vea el efecto de la validación
  $usuario="daniel";
  $mensaje=validar($usuario);
  echo $mensaje;?>
  </p>
  <!--Aquí estoy validando el password del usuario-->
  <p class="php">
  <?php 
  //Cambie aquí este dato para que vea el efecto de 
  //la validación
  $password="123456";
  $mensaje=clave($password);
  echo $mensaje;?>
  </p>

</body>
</html>