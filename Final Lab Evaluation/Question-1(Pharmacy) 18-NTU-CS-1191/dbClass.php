<?php
    class dbConn{
        public $conn;

        public function __construct(){
            
            try {
                $this->conn = new PDO("mysql:host=localhost;dbname=Pharmacy;", "root", "");
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Detected Prolem: " . $e->getmessage();
            }
        }

        public function displayMed(){
            $sql = $this->conn->query("Select * from medicine");
            return $sql;
        }

        public function insertMed($MedicineName, $Company, $Quantity, $RemQuantity, $Medicineid){
            $insertSql = $this->conn->prepare("insert into medicine (medicine_id, medicine_Name, company, quantity, remquantity) values (:Medicineid, :MedicineName, :Company, :Quantity, :RemQuantity)");
            $insertSql->bindParam(":Medicineid", $Medicineid);
            $insertSql->bindParam(":MedicineName", $MedicineName);
            $insertSql->bindParam(":Company", $Company);
            $insertSql->bindParam(":Quantity", $Quantity);
            $insertSql->bindParam(":RemQuantity", $RemQuantity);
            $insertSql->execute();
            if($insertSql->rowCount()>0){
               header("Location:medicineDisplay.php");
            }
             else{
                 echo "Query failed to Insert Data";
             }
            
        }
        public function delete($id){
            $delSql = $this->conn->exec("Delete from medicine where  medicine_id = '$id'");
            if($delSql > 0){
                header("Location:medicineDisplay.php");
            }
            else{
                echo "Failed to execute";
            }
        }
    }
?>