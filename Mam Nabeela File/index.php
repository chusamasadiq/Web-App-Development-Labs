<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php 
    include "navbar.html";
    include "dbclass.php";
?>
<div class="container">
    <table class="table table-striped">
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Age</th>
            <th>Student Address</th>
            <th>Student DOB</th>
            <th>Perform Actions</th>
        </tr>
        <?php 
            $st = new database();
            $sql=$st->showTable();
            while($row = $sql->fetch()){
        ?>
        <tr>
            <td><?php echo $row['S_ID']; ?></td>
            <td><?php echo $row['S_Name']; ?></td>
            <td><?php echo $row['S_Age']; ?></td>
            <td><?php echo $row['Address']; ?></td>
            <td><?php echo $row['Birth']; ?></td>
            <td>
                <a class="btn btn-warning" href="delete.php?id=<?php echo $row['S_ID'];?>" name="deleteBtn">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>