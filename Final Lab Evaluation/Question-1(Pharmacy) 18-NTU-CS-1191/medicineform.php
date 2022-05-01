<?php  
   
 session_start();

if(!isset($_SESSION['username'])){
	header('location:Login.php');
}
else
{
    include "Header.php";
    include "dbClass.php";
    $conn = new dbConn();
    $MedicineName=$Company=$Quantity=$RemQuantity="";
    if(isset($_GET['InsertBtn'])){
    $MedicineName = $_GET['MedicineName'];
    $Company=$_GET['Company'];
    $Quantity = $_GET['Quantity'];
    $RemQuantity = $_GET['RemQuantity'];
    $Medicineid = $_GET['Medicineid'];
    $conn->insertMed($MedicineName, $Company, $Quantity, $RemQuantity, $Medicineid);
}
}
?>
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

    <title>Insert</title>
</head>
<body>

<div class="container mt-5">
<form action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="form-group row">
        <label for="MedicineName" class="col-sm-2">Medicine Name</label>
        <input type="text" class="form-control col-sm-10" name="MedicineName">
    </div>
    <div class="form-group row">
        <label for="Company" class="col-sm-2">Company</label>
        <input type="text" class="form-control col-sm-10" name="Company">
    </div>
    <div class="form-group row">
        <label for="Quantity" class="col-sm-2">Quantity</label>
        <input type="number" class="form-control col-sm-10" name="Quantity">
    </div>
    <div class="form-group row">
        <label for="RemQuantity" class="col-sm-2">Remaining Quantity</label>
        <input type="number" class="form-control col-sm-10" name="RemQuantity">
    </div>

    <div class="form-group row">
        
        <input type="hidden" class="form-control col-sm-10" name="Medicineid">
    </div>
    
    <div class="form-group">
        <button class="btn btn-primary" name="InsertBtn">Insert Medicine</button>
    </div>
</form>
</div>


</body>
</html>