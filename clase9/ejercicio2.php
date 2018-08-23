<?php

session_start();

$_SESSION['color'] = $_POST['color'];

if($_POST['color']){
    
}

?>

<html bg-color="<?php echo $_SESSION['color'];?>">

    <form action="" method="POST">
        <select name="color" id="">
            <option value="rojo">Rojo</option>
            <option value="verde">Verde</option>
            <option value="azul">Azul</option>
            <br>
            <input type="submit" name="enviar" value="Enviar">
            <input type="reset" name="reset" value="Reset">
        </select>
    </form>

</html>