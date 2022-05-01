<?php
$servername = "localhost";
$username = "root";
$password = NULL;
$dbname = "authentication";

try {
  $UserName=$_POST['UserName'];
  $Email=$_POST['Email'];
  function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  
  $Password=password_generate(7);
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $sql = "INSERT into users(user_id,Username,Password,Email) 
  values('','$UserName','$Password','$Email')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
  include "HomePage.php";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
