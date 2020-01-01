<?php
$uploaddir = '';

    $uploadfile = $uploaddir . basename($_FILES['file']['name']);
    echo $uploadfile;
    if(copy($_FILES['file']['tmp_name'], $uploadfile)){
    echo "File was successfully uploaded.";
    }else{
    echo "Possible file upload attack!";
    }
?>