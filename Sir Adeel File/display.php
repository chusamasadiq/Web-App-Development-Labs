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
include 'header.php';
session_start();
//print_r($_SESSION);
if (isset($_SESSION['uid']) && !empty($_SESSION['uid'])){


require 'database.php';
$sql = "SELECT * FROM contact";
$record = mysqli_query($con, $sql);


?>
<style type="text/css">
	.sucess {
    width: 100%;
    background-color: green;
    padding: 10px;
    color: #fff;
}
</style>

<div class="container">
	<div class="sucess">
	<?php if(!empty($_GET['delete'])){
		  echo "<h2>Data Deleted...</h2>";
		}
		if(!empty($_GET['update'])){
		  echo "<h2>Data Updated...</h2>";
		}
    if(!empty($_SESSION['uname'])){
      echo "<h2>Welcome Back {$_SESSION['uname']}</h2>";
    }
	?>
</div>
  <h2>Contact Form Results</h2>
  <a href="form.php"> Add new Entry </a>

  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Country</th>
        <th>Message</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
  <?php   
  $num = 0; 
  while ( $result = mysqli_fetch_array($record)) {
    $num++;
//echo "<pre>";
//print_r($result);
?>
      <tr>
        <td><?php echo $num; ?></td>
        <td><?php echo $result['name']; ?></td>
        <td><?php echo $result['email']; ?></td>
        <td><?php echo $result['phone_no']; ?></td>
        <td><?php echo $result['country']; ?></td>
        <td><?php echo $result['message']; ?></td>
        <td><a href="edit.php?id=<?php echo $result['id'];?> ">Edit </a> / <a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>
      </tr>      
     <?php } ?>
    </tbody>
  </table>
</div>
<?php } 
else{ echo "Please login to see page.";} ?>
</body>
</html>

