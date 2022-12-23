<?php

class Cars
{

    private $door_count = 4;

    function get_values()
    {
        echo $this->door_count;
    }

    function set_values($val)
    {
        $this->door_count = $val;
        echo $this->door_count;
    }
}

$bmw = new Cars();

$bmw->get_values();

echo "<br>";

$bmw->set_values(10000);
