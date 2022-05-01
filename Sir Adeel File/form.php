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
session_start();
if (isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
include 'header.php';
//$success = $_GET['sucess'];
if(!empty($_GET['sucess'])){
  echo "<h2>Data inserted...</h2>";
}

?>

<div class="container">
  <h2>Contact form</h2>
  <form action="add.php" method="post" >

    <div class="form-group">
      <label for="pwd">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
        <div class="form-group">
      <label for="pwd">Phone</label>
        <input type="text" class="form-control" id="" placeholder="Enter Phone" name="phn">
    </div>
        <div class="form-group">
      <label for="pwd">Country</label>
        <input type="text" class="form-control" id="" placeholder="Enter Country" name="country">
    </div>
        <div class="form-group">
      <label for="pwd">Message</label>
        <input type="text" class="form-control" id="" placeholder="Enter Message" name="message">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php } else{ echo "Please login to see page.";} ?>
</body>
</html>
