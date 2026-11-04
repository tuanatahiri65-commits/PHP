<?php

$myfile=fopen("ds.txt","r");

while(!feof($myfile)){

echo fgets($myfile) . "<br>";

}

fclose("ds.txt");




?>