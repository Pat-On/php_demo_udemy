<?php 

class Car {
    
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
  
    function MoveWheels(){
    
      $this->wheels = $this->wheels + 10;
        
    
    } 
    
    
    function CreateDoors($something){
      echo $something;
      $this->doors = 6;
        
    
    } 

}

$bmw = new Car();
$truck = new Car();

echo "BMW wheels: " . $bmw->wheels . "<br>";
$bmw->MoveWheels();
echo "BMW wheels: " . $bmw->wheels . "<br>";
$bmw->MoveWheels();
echo "BMW wheels: " . $bmw->wheels . "<br>";


echo "Truck wheels: " . $truck->wheels = 10 . "<br>";

// calling methods of truck instance (funny syntax :>)
$truck->CreateDoors("boom <br>");
echo "Truck doors: " . $truck->doors;
