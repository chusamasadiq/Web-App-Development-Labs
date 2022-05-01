<?php
require 'database.php';

if(isset($_GET['id']) || !empty($_GET['id'])){
$id = $_GET['id'];
//echo $id;
//echo "Record Deleted";
$sql = "DELETE FROM `contact` WHERE `contact`.`id` = {$id}";
	if(mysqli_query($con, $sql)){
		//echo "Data Deleted";
		header("Location: display.php?delete=Deleted");
	}
}
else{
	echo "Please enter an id"; 
}
?>