<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
// key  
if(isset($_FILES['file'])){
    $target_dir = "uploads/";
    $target_file = basename($_FILES["file"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $fileName = $target_dir . time() . "." .$imageFileType;
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $fileName)) {
        $_SESSION['resim'] = $fileName;
        header("Location: index.php?session=true");
    } else {
        echo "sorrı";
    }

}

?>