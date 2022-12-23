<?php

class Cars
{

    public $wheel_count = 4;

    // it is used to construct and destruct something when you are creating instance

    // called automatically
    function __construct()
    {
        echo $this->wheel_count . "<br>";
    }

    // called automatically
    function __destruct()
    {
        echo $this->wheel_count . "<br>";
    }
}

$bmw = new Cars();
