<?php

try{


$conn= new PDO("mysql:host=localhost; dbname=digital2","root","");
$sql="ALTER table users add contact int(255)";

//i tregojm vka me bane
//me ndyrsho ose me shty prsh gmail - alter

$conn->exec($sql);
echo "column created";

}catch(Exception $e){
    echo "column not created";
}


?>