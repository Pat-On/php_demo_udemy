<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    $number = 10;
    $number = 1000;

    $number = "Edwin";
    echo $number . "<br>";

    // syntax of constant
    define("NAME", 1000);

    echo NAME;

    // Works as of PHP 5.3.0

    const CONSTANT = 'Hello World';


    echo CONSTANT;


    // Works as of PHP 5.6.0

    const ANOTHER_CONST = CONSTANT . '; Goodbye World';

    echo ANOTHER_CONST;


    const ANIMALS2 = array('dog', 'cat', 'bird');

    echo ANIMALS2[1]; // outputs "cat"


    // Works as of PHP 7

    define('ANIMALS', array(

        'dog',

        'cat',

        'bird'

    ));

    echo ANIMALS[1]; // outputs "cat"



    ?>




</body>

</html>