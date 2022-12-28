<?php
// https://www.php.net/manual/en/features.file-upload.errors.php
$upload_errors = array(
    UPLOAD_ERR_OK           => "There is no error, the file uploaded with success.",
    UPLOAD_ERR_INI_SIZE     => "The uploaded file exceeds the upload_max_filesize directive in php.ini.",
    UPLOAD_ERR_FORM_SIZE    => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.",
    UPLOAD_ERR_PARTIAL      => "The uploaded file was only partially uploaded.",
    UPLOAD_ERR_NO_FILE      => "No file was uploaded.",
    UPLOAD_ERR_NO_TMP_DIR   => "Missing a temporary folder.",
    UPLOAD_ERR_CANT_WRITE   => "Failed to write file to disk.",
    UPLOAD_ERR_EXTENSION    => "A PHP extension stopped the file upload."
);

$the_message = "";
if (isset($_POST["submit"])) {

    print_r($_FILES["file_upload"]);

    $the_error = $_FILES['file_upload']["error"];

    $the_message =  $upload_errors[$the_error];
}







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">


        <?php

        if (!empty($upload_errors)) {
            echo "<h2>" . $the_message . "</h2>";
        }


        ?>

        <input type="file" name="file_upload">

        <br>

        <br>

        <input type="submit" name="submit">


    </form>
</body>

</html>