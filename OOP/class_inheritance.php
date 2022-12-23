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

}


$bmw = new Cars();


class Trucks extends Cars {
    var $wheel_count = 400000;
}

$tacoma = new Trucks();

$tacoma->car_details();

