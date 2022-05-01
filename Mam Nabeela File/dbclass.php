<?php
    class database{
        private $conn;

        public function __construct(){
            
            try {
                $this->conn = new PDO("mysql:host=localhost;dbname=csstudent;", "root", "");
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Detected Prolem: " . $e->getmessage();
            }
        }

        public function showTable(){
            $sql = $this->conn->query("Select * from student");
            return $sql;
        }

        public function insert($name, $age, $address, $birth){
            $insertSql = $this->conn->prepare("insert into student (S_Name, S_Age, Address, Birth) values (:name, :age, :address, :birth)");
            $insertSql->bindParam(":name", $name);
            $insertSql->bindParam(":age", $age);
            $insertSql->bindParam(":address", $address);
            $insertSql->bindParam(":birth", $birth);
             $insertSql->execute();
             if($insertSql->rowCount()>0){
               header("Location:index.php");
             }
             else{
                 echo "Query failed to execute";
             }
            
        }
        public function delete($id){
            echo "ID is:" . $id;
            $delSql = $this->conn->exec("Delete from student where S_ID = '$id'");
            if($delSql > 0){
                echo "Deleted Successfully";
            }
            else{
                echo "Failed to execute";
            }
        }
    }
?>