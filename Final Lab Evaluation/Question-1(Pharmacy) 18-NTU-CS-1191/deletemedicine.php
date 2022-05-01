<?php
    
    session_start();
   
   if(!isset($_SESSION['username'])){
       header('location:Login.php');
   }
   
    include "dbClass.php";
    $id = $_GET['id'];
    $conn = new dbConn();
    $conn->delete($id);
?>