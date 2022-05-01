<?php

  $database = "mysql:host=localhost;dbname=birds";
  $username = "root";
  $password = NULL;
  $message = "";
  $conn = new PDO($database, $username, $password);
  if(!$conn){
      die("Connection failed");
  }
  
?>

