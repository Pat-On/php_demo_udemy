<?php

class Cars
{

    // static modifiers - you do not need to your instance just class
    static $static_door_count = 1000000;

    // used anywhere in the script
    static $wheel_count = 4;

    // only in this script - class
    static $door_count = 4;

    // inside class and inside inheritance 
    static $seat_count = 6;


    static function car_details()
    {
        echo Cars::$wheel_count . "<br>";
        echo "funny syntax :>";
        echo Cars::$door_count . "<br>";
        echo Cars::$seat_count . "<br>";
    }
}

$bmw = new Cars();

echo Cars::$static_door_count . "<br>";

Cars::car_details();
