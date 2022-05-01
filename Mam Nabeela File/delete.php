<?php
    include "navbar.html";
    include "dbclass.php";
    $id = "";
    $id = $_GET['id'];
    $conn = new database();
    $conn->delete($id);
?>