<?php




$host="localhost";
$user="root";
$pass="";




try{

$conn= new PDO("mysql:host=$host",$user,$pass);
$sql="Create Database digital2";
$conn->exec($sql);

echo "database is created";
}catch(exception $e){
echo "database is not created";

}






?>