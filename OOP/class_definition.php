<?php

class Cars {
    
}


$my_classes = get_declared_classes();

echo $my_classes;


// foreach ($arr as $key => $value) { // syntax
foreach($my_classes as $class){
    echo $class . '<br>';
}