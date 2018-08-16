<?php

$a = ['a'=>1, 'b'=>2, 'c'=>'Yo <3 JSON'];

$var_a = json_encode($a, true);

// echo $var_a;

$b = json_decode($var_a, true);

// var_dump($b);
echo $b['c'] . "|" . $b['a'] . "|" . $b['b'];

?>