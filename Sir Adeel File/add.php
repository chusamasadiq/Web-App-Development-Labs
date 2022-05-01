<?php
require 'database.php';
echo "<pre>";
//print_r($_POST);

$contact_name = $_POST['name'];
$contact_email = $_POST['email'];
$contact_phone = $_POST['phn'];
$contact_country = $_POST['country'];
$contact_message = $_POST['message'];


echo "<br>";
//echo $contact_name.$contact_email.$contact_phone.$contact_country.$contact_message;


$sql = "INSERT INTO `contact` (`id`, `name`, `email`, `phone_no`, `country`, `message`) VALUES (NULL, '{$contact_name}', '{$contact_email}', '{$contact_phone}', '{$contact_country}', '{$contact_message}')";
//echo $sql;


	if(mysqli_query($con, $sql)){
		//echo "Data Inserted";
		header("Location: display.php?sucess=yes");
	}
?>