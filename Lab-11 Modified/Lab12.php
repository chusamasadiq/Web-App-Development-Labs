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
include "dbConnection.php";
    

    $query="Select * from users";
 
    $result=$conn->query($query);
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
	          <a class="nav-link" href="Lab12.php">Display Record</a>
	        </li>
	        
	        
	        <li class="nav-item pr-5" >
	          <a class="nav-link" href="Login.php">Logout</a>
	        </li>

	      </ul>
	    </div>
	  </div>
	</nav>

        <h2 style="text-align: center; padding-top: 30px;">User Records Table </h2>
        
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>User Name</th>
                    
                    <th>Email</th>
                </tr>
            </thead>
            
            <tbody>
                <?php 
                $res=$result->fetchAll();
                foreach($res as $row)
                {;
                ?>
                <tr> 
                
                    <td><?php echo $row['user_id']; ?></td>
                    
                    <td><?php echo $row['username']; ?></td>
                  
                    <td><?php echo $row['email'];?>   </td> 
                 </tr>
                 
                <?php }; ?>
                </tbody>
     </table>
</div>


  </body>
  </html>