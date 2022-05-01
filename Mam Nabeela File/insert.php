<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
include "navbar.html";
include "dbclass.php";
$conn = new database();
$name=$age=$address=$birth="";
if(isset($_GET['saveBtn'])){
    $name = $_GET['name'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    $birth = $_GET['birth'];
    $conn->insert($name, $age, $address, $birth);
}

?>
<div class="container">
<form action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="form-group row">
        <label for="name" class="col-sm-2">Student Name</label>
        <input type="text" class="form-control col-sm-10" name="name">
    </div>
    <div class="form-group row">
        <label for="age" class="col-sm-2">Student Age</label>
        <input type="number" class="form-control col-sm-10" name="age">
    </div>
    <div class="form-group row">
        <label for="address" class="col-sm-2">Student Address</label>
        <input type="text" class="form-control col-sm-10" name="address">
    </div>
    <div class="form-group row">
        <label for="birth" class="col-sm-2">Student DOB</label>
        <input type="date" class="form-control col-sm-10" name="birth">
    </div>
    <button class="btn btn-primary" name="saveBtn">Save Changes</button>
    
</form>
</div>
