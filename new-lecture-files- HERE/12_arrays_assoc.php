<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    /*
        In PHP, associative arrays are implemented as hashtables, with a bit of extra functionality.

        However technically speaking, an associative array is not identical to a hashtable - it's simply implemented in part with a hashtable behind the scenes. Because most of its implementation is a hashtable, it can do everything a hashtable can - but it can do more, too.

        For example, you can loop through an associative array using a for loop, which you can't do with a hashtable.

        So while they're similar, an associative array can actually do a superset of what a hashtable can do - so they're not exactly the same thing. Think of it as hashtables plus extra functionality.

        https://stackoverflow.com/questions/3134296/hash-tables-vs-associative-arrays

    */



    $number = array('juanita', 'maria', 'jose');

    //print_r($number);

    echo $number[0] . "<br>";
    echo "<br>";


    // Associative Array Below

    $names = array("first_name" => 'Edwin', "Last_Name" => 'Diaz');

    // print_r($names);
    
    echo "<br>";
    
    echo $names['first_name'] . " " . $names['Last_Name'];


    ?>

</body>

</html>