<?php
// http://localhost/demo/new-lecture-files-%20HERE/57_get.php?id=10&source=reports
print_r($_GET); // super Global
echo "<br/>";


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    $id = 10;
    $button = "CLICK HERE NOW";


    ?>


    <a href="57_get.php?id=<?php echo $id; ?>">
        <?php echo $button; ?>
    </a>




</body>

</html>