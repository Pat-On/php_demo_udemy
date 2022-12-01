<?php

class Car
{

  static $wheels = 4;
  var $hood = 1;


  function MoveWheels()
  {

    Car::$wheels = 10;
  }
}

$bmw = new Car();

//$bmw->wheels;
// syntax to call static method
Car::MoveWheels();

//echo Car::$wheels;
