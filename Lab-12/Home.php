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

  <title>Display</title>

</head>

<body>

    <?php
      $database = "mysql:host=localhost;dbname=authentication";
      $username = "root";
      $password = NULL;
      $conn = new PDO($database, $username, $password);
      if(!$conn){
          die("Connection failed");
      }
    
    ?>

<div class="container" style="text-align: center; padding-top: 20px;">
    <div class="jumbotron" style=" text-align: center;">
		  <h1>Welcome to Admin Panel</h1>
	  </div>


		<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  	<div class="container-fluid">
	 
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link pr-5" aria-current="page" href="AddUser.php" >Add New User</a>
	        </li>
	        <li class="nav-item pr-5">
	          <a class="nav-link" href="Home.php">Display Record</a>
	        </li>
	        
	        
	        <li class="nav-item pr-5" >
	          <a class="nav-link" href="Login.php">Logout</a>
	        </li>

	      </ul>
	    </div>
	  </div>
	</nav>

    <div class="container" style="text-align: center; padding-top: 20px;" >

        <h2>Users Details</h2>
        
            <table class="table">
                
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                   <tbody>
                   <?php
                        $sql = $conn->query("Select * from users");
                        while($row = $sql->fetch()) {
                        ?>
                        <tr>
                                <td><?php echo $row['user_id']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td> <a href="Delete.php?id=<?php echo $row['user_id'];?>">Delete</a>/
                                <a href="Update.php?id=<?php echo $row['user_id'];?>">Edit</a>  
                                     </td>
                            </tr>      
                          <?php }?>
                   </tbody>

            </table>
      </div>
  </div>
</body> 
</html>


