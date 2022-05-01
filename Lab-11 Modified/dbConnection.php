<?php
$database = "mysql:host=localhost;dbname=authentication;";
$user_id= "root";

$password = "";


$conn = new PDO($database, $user_id, $password);
    if(!$conn)
    {
        die("Connection failed");
    }
?>


