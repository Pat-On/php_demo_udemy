<?php

class Cars
{
    // used anywhere in the script
    public $wheel_count = 4;

    // only in this script - class
    private $door_count = 4;

    // inside class and inside inheritance 
    protected $seat_count = 6;


    function car_details()
    {
        echo $this->wheel_count . "<br>";
        echo "funny syntax :>";
        echo $this->door_count . "<br>";
        echo $this->seat_count . "<br>";
    }
}

$bmw = new Cars();

echo $bmw->wheel_count . "<br>";

// echo $bmw->door_count; // error s
// echo $bmw->seat_count; // error


$bmw->car_details();
