<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];

echo "First Name: " . $fname;
echo "<br>";
echo "Last Name: " .  $lname;
echo "<br>";

$fullname=$fname." ".$lname;
echo "Fullname (As a Concatenated String): ".$fullname;
?>