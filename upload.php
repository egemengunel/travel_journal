<?php
session_start(); // Start the session at the beginning of the script

$uploadOk = 1; // Assume file is OK to upload

if (isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check === false) {
        $uploadOk = 0;
        $_SESSION['message'] = "File is not an image.";
    }

    if ($_FILES["image"]["size"] > 10000000) {
        $uploadOk = 0;
        $_SESSION['message'] = "Sorry, your file is too large.";
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $uploadOk = 0;
        $_SESSION['message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }

    if ($uploadOk == 0) {
        $_SESSION['message'] = "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $_SESSION['uploaded_image'] = $target_file;
            $_SESSION['message'] = "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
        } else {
            $_SESSION['message'] = "Sorry, there was an error uploading your file.";
        }
    }
}

// Redirect to uploadPage.php whether the upload was successful or not
header('Location: uploadPage.php');
exit;
?>
