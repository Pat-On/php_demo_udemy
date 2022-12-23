<?php

class Cars
{

    static $door_count = 4;

    static function details()
    {
        return self::$door_count;
    }

    function set_values($val)
    {
        return  self::$door_count = $val;
    }
}


class Trucks extends Cars
{
    static function display()
    {
        echo parent::details();
    }
}

$bmw = new Cars();

Trucks::display();
