<!DOCTYPE html>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
  integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <title>Add User</title>

</head>

<body>
<?php

include "dbConnection.php";
$id=$username=$email=$password"";
if(isset($_GET['saveBtn'])){
    $name = $_GET['name'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    $birth = $_GET['birth'];
    $conn->insert($name, $age, $address, $birth);
}

?>

  <div class="container bg-light">

    <form action="#" method="POST">
      
      <h1 class="Heading" style="text-align: center; padding-top: 20px"> Add New User </h1>
      
        
          <div class="form-group">
            <label for="name">User Name</label>
            <input type="text" class="form-control" name="username" placeholder="Enter User Name">
          </div>

        
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email">
          </div>
          
          <button type="submit" class="btn btn-secondary"> Submit</button>
      </form>
  </div>

</body>

</html>