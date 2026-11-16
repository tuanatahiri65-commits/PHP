<?php

try{


$conn= new PDO("mysql:host=localhost; dbname=digital2","root","");
$sql="ALTER table users drop email ";
// drop e fshin


$conn->exec($sql);
echo "column dropped";

}catch(Exception $e){
    echo "column not dropped";
}


?>