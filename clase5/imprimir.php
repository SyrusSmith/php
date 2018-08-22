<?php
echo"<pre>";
var_dump ($_POST);
echo"</pre>";

foreach ($_POST as $key => $value) {
    echo "$key : $value";
    echo "<br>";
}

echo "<br>";

foreach ($_POST[hobbies] as $key => $value) {
    //hay que poner el [array] dentro de post para que el foreach lo recorra también
    echo $key." ".$value;
    echo "<br>";
    
}



?>