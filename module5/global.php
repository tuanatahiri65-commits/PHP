<?php

$x=3;


function sum(){
   global $x, $y;
    $y=5;
    echo $y;
    echo $x+$y . "<br>";
}

sum();


echo $y . "<br>";



?>