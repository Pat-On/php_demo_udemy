<?php

if (isset($_POST['name'])) {
    echo $_POST['name']; // super Global :>
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <form action="58_the_post.php" method="post">

        <input type="tex" name="name">

        <input type="submit">


    </form>


</body>

</html>