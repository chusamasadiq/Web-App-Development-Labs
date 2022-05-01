<?php

  $database = "mysql:host=localhost;dbname=sestudent";
  $username = "root";
  $password = NULL;
  $conn = new PDO($database, $username, $password);
  if(!$conn){
      die("Connection failed");
  }
  else{
      echo "DataBase Successfully Connected"
  }
?>

