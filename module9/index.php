<?php

include_once("connection.php");

if (isset($_POST["username"],$_POST["password"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
}



?>
























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>module9</title>
</head>
<body>

<form method="post">

    <labl for="username">Username:</labl>
    <input type="text" id="usernname" name="username">

    <labl for="password">Password:</labl>
    <input type="password" id="password" name="password">

    <input type="submit" value="submit">


</form>            






</body>

</html>
