<?php
if(isset($_POST["submit"])) {
    $check = $_FILES["file"]["name"];
    if($check !== false) {
        move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_FILES["file"]["name"]);
        echo "File is an image - " . $check . ".";
        echo '<br>';
        echo "hint:/uploads/";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>