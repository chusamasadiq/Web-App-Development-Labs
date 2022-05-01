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
$database = "mysql:host=localhost;dbname=authentication;";
$user_id= "root";

$password = "";


$conn = new PDO($database, $user_id, $password);
    if(!$conn)
    {
        die("Connection failed");
    }
    else{
        echo "Connection succeeded";
    }

    $query="Select * from users";
 
    $result=$conn->query($query);
    ?>

<div class="container" style="text-align: center; padding-top: 20px;">
        <h2>User Records Table </h2>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Password</th>
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
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['email'];?>   </td> 
                 </tr>
                 
                <?php }; ?>
                </tbody>
     </table>
</div>


  </body>
  </html>