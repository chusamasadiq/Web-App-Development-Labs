<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require 'database.php';
if (isset($_GET['update']))
{
	
$contact_name = $_GET['name'];
$contact_email = $_GET['email'];
$contact_phone = $_GET['phn'];
$contact_country = $_GET['country'];
$contact_message = $_GET['message'];
$contact_id = $_GET['contact_id'];
$sql ="UPDATE `contact` SET `name` = '{$contact_name}', `email` = '{$contact_email}', `phone_no` = '{$contact_phone}', `country` = '{$contact_country}', `message` = '{$contact_message}' WHERE `contact`.`id` = {$contact_id};";
	//echo $sql;
	if(mysqli_query($con, $sql)){
		echo "Data Updated";
		header("Location: display.php?update=yes");
	}

}

if (isset($_GET['id']))
{
	$id= $_GET['id'];
	//echo $id;
	$sql = "SELECT * FROM contact WHERE contact.id = {$id}";
	//echo $sql;
	$record = mysqli_query($con, $sql);
	$result = mysqli_fetch_array($record);
	//echo "<pre>";
	//print_r($result);





?>

<div class="container">
  <h2>Contact form</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" >

    <div class="form-group">
      <label for="pwd">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $result['name']; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $result['email']; ?>">
    </div>
        <div class="form-group">
      <label for="pwd">Phone</label>
        <input type="text" class="form-control" id="" placeholder="Enter Phone" name="phn"  value="<?php echo $result['phone_no']; ?>">
    </div>
        <div class="form-group">
      <label for="pwd">Country</label>
        <input type="text" class="form-control" id="" placeholder="Enter Country" name="country"  value="<?php echo $result['country']; ?>">
         <input type="hidden" class="form-control" id="" placeholder="Enter Country" name="contact_id"  value="<?php echo $_GET['id']; ?>">

    </div>
        <div class="form-group">
      <label for="pwd">Message</label>
        <input type="text" class="form-control" id="" placeholder="Enter Message" name="message"  value="<?php echo $result['message']; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="update" value="update"> Update</button>
  </form>
</div>
<?php } ?>
</body>
</html>
