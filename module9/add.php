<?php

include_once("connection.php");

if(isset($_POST['sumbit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];


    $sql="insert into users (email,password)
    values(:email,:password)";

     $sqlQuery=$conn->prepare($sql);
    $sqlQuery->bindParam(':email',$email);
    $sqlQuery->bindParam(':password',$password);
    $sqlQuery->execute();
    echo " data save successfully";

}



?>