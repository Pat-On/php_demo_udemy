<?php

class Cars
{
    var $wheel_count = 4;
    var $door_count = 4;


    function car_details()
    {
        echo $this->wheel_count . "<br>";
        echo "funny syntax :>";
    }


    function car_details_return_ver()
    {
        return "This car has " . $this->door_count;
    }
}

$bmw = new Cars();

$bmw->car_details();
echo "<br>";
echo $bmw->wheel_count;
echo "<br>";
$bmw->wheel_count = 100;
echo "<br>";
echo $bmw->wheel_count;
echo "<br>";
echo $bmw->car_details_return_ver();
