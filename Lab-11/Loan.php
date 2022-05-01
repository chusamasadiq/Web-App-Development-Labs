<?php
class loan{
    public $name;
    public $loan_number;
    public $loan_amount;

    function __construct($name,$loan_number,$loan_amount){
        $this ->name=$name;
        $this ->loan_number=$loan_number;
        $this ->loan_amount=$loan_amount;
    }
    public function loandisplay(){
        echo "Name    " , $this->name ."<br>";
        echo "Loan Number    " , $this->loan_number ."<br>";
        echo "Amount Of Loan   " , $this->loan_amount ."<br>";
    }
}

class autoloan extends loan{
    public $vehicle_name;
    public $vehicle_modell;
    public $vehicle_type;


function __construct($vehicle_name,$vehicle_modell,$vehicle_type){
    $this->vehicle_name= $vehicle_name;
    $this->vehicle_modell= $vehicle_modell;
    $this->vehicle_type= $vehicle_type;

}
public function autodisplay(){
        echo "Vehicle Name:" , $this->vehicle_name ."<br>";
        echo "Vehicle Modell is:" , $this->vehicle_modell ."<br>";
        echo "Vehicle type:" , $this->vehicle_type ."<br>";

}
}
class homeloan extends loan{
    public $size;
    public $location;
   


function __construct($size,$location){
    $this-> size= $size;
    $this->location= $location;
    
}
public function homedisplay(){
        echo "Size of home:" , $this->size ."<br>";
        echo "Land Location:" , $this->location ."<br>";
       
}
}

$lon=new loan("Ahsan",5,4000);
$lon->loandisplay();

$alon=new autoloan("Proton Saga", 2021,"Car");
$alon->autodisplay();
$hlon=new homeloan("1200sq","Raza Abad");
$hlon->homedisplay();
?>