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

  <title>Lab-14 | Birds Form</title>

</head>

<body>

<?php    
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "birds";  
 $message = ""; 
 
 try {
     if(isset($_GET["submit"]))  
     { 
     $BirdName=$_GET['birdname'];
     $Food=$_GET['food'];
     $EnteredBy=$_GET['enteredby'];
     $BirdID=$_GET['BirdId'];
     
     $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
     $sql = "INSERT into bird_detail(bird_id,bird_name,food,entered_by) 
     values('','$BirdName','$Food','$EnteredBy')";
     
     $connect->exec($sql);
     
     echo "New record created successfully";
   }
} 

   catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  

 
 ?>
 
 <div class="container" style="width:800px;">  
 <div class="btn">
      
  <a href="logout.php">
  <button type="button" name= "logout" class="btn btn-danger"> Logout</button>
  </a>
       
</div>
     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
      <h1 class="Heading p-4" style="text-align: center;"> Bird Details Form </h1>
        
      <div class="col-lg-12">
          <div class="form-group">
            <label for="birdname">Bird Name</label>
            <input type="text" class="form-control" name="birdname" placeholder="Enter Bird Name">
          </div>
        </div>

        <div class="col-lg-12">
          <div class="form-group">
            <label for="food">Food</label>
            <input password="text" class="form-control" name="food" placeholder="Enter Food Name">
          </div>
        </div>

        <div class="col-lg-12">
          <div class="form-group">
            <label for="enteredby">Entered By</label>
            <input password="text" class="form-control" name="enteredby" placeholder="Enter your Name">
          </div>
        </div>

        <div class="col-lg-12">
          <div class="form-group">
            <input type="hidden" class="form-control" name="BirdId">
          </div>
        </div>


        <div class="btn">
        <button type="submit" name= "submit" class="btn btn-primary"> Submit</button>
        </div>

        
    </div>
  </form>

  <div class="fixed-bottom">
<?php 
  $cookie_name='User';
  $cookie_value='Visiter';
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
  if (!isset($_COOKIE['count'])) { 
    echo "Welcome! This is the first time you have viewed this page."; 
    $cookie = 1;
    setcookie("count", $cookie);
  }else{
    $cookie = ++$_COOKIE['count'];
    setcookie("count", $cookie); 
    echo "You have viewed this page ".$_COOKIE['count']." times."; 
    }
?> 
  </div>
</body>

</html>