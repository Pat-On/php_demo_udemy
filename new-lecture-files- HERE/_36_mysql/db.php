<?php
   
    // mysqli_connect(host, username, password, dbname, port, socket)
   $connection = mysqli_connect('localhost', 'root', '', 'loginapp');  
    if(!$connection) {
        die("Database connection failed");
    }

    ?>