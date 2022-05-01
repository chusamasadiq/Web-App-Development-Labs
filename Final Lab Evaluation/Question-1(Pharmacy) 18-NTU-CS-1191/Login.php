<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="Jquery.js"></script>

    <link rel="stylesheet" href="myStyleSheet.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <title>Login </title>
</head>

<?php  
include ("dbClass.php");
session_start();  
 $obj = new dbConn();
 if(isset($_POST['Login'])) 
 {
     $username = $_POST['username'];
     $password = $_POST['password'];
     $Sql= "Select * from login where username='{$username}' AND password='{$password}'";
     $Record= $obj->conn->query($Sql);
     $row=$Record->fetch(PDO::FETCH_ASSOC);

     if($Record->RowCount()>0){
         if($username==$row['username'] && $password==$row['password']){
             $_SESSION['username']=$username;
         header("Location: medicineDisplay.php");
         }

     }
     else
     {
         echo "Username and Password is incorrect.";
         header("Location: Login.php");
     }
 }
 ?>
 
 <div class="container" style="width:500px;">  
    <?php  
        if(isset($message))  
        {  
          echo '<label class="text-danger">'.$message.'</label>';  
        }  
        ?>  
 <form action="#" method="POST">
   

      <h1 class="Heading pt-5" style="text-align: center;"> Login Form </h1>
        
      <div class="col-lg-12">
          <div class="form-group pt-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter username">
          </div>
        </div>

        <div class="col-lg-12">
          <div class="form-group pt-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password">
          </div>
        </div>

        <div class="text-center pt-3">
        <button type="submit" name="Login" class="btn btn-primary"> Login</button>
        </div>
        
        
    </div>
  </form>
</body>

</html>