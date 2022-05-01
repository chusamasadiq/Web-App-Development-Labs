<?php  
 //login_success.php  
 session_start();

if(!isset($_SESSION['username'])){
	header('location:Login.php');
}

 else
 {  
    echo '<h2>Login Success, Welcome - '.$_SESSION["username"].'</h2>';    
    include "header.php";
    include "dbClass.php";
    ?>
    
<div class="container">
    <table class="table table-striped mt-5">
        <tr>
            <th>S.No</th>
            <th>Medicine Name</th>
            <th>Company</th>
            <th>Quantity</th>
            <th>Remaining Quantity</th>
            <th>Perform Action</th>
        </tr>
        <?php 
            $conn = new dbConn();
            $sql=$conn->displayMed();
            while($row = $sql->fetch()){
        ?>
        <tr>
            <td><?php echo $row['medicine_id']; ?></td>
            <td><?php echo $row['medicine_name']; ?></td>
            <td><?php echo $row['company']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['remquantity']; ?></td>
            <td>
                <a class="btn btn-danger" href="deletemedicine.php?id=<?php echo $row['medicine_id'];?>" name="deleteBtn">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php } ?>
