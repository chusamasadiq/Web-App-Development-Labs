<?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
      
      echo '<br /><br /><a href="Birds.php">Add Birds Detail</a>';
      echo '<br /><br /><a href="logout.php">Logout</a>';  
      echo '<br /><br /><a href="loginagain.php">login</a>';
      
 }  
 else  
 {  
      header("location:login.php");  
 }  
 ?>  