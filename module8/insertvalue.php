<?php

try{

$conn= new PDO("mysql:host=localhost; dbname=digital2", "root","");

$username="tuana";
$password=password_hash("testtest",PASSWORD_DEFAULT);


$sql="insert into users (username,password) value ('$username','$password')";
$conn->exec($sql);
echo "insert successfully";
}catch(Exception $e){

echo "insert not successfully";
}

?>