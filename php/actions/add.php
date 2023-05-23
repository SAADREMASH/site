<?php


$targetDir = "../images/";
if ($file = $_FILES["img"]["size"] > 0) {
    $file = $_FILES["img"];
    $fileUploaded = false;
    $target_file = $targetDir . basename($file["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    if ($file["size"] > 500000) {
        echo "Sorry, your file is too large.";
    }

    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

    ) {
        echo "Sorry, only JPG, JPEG & PNG files are allowed.";
    }
    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        $fileUploaded = $target_file;
    } else {
        $fileUploaded = null;
    }
} else {
    $fileUploaded = null;
}

include_once("../includes/db.inc.php");


$firstname = mysqli_real_escape_string($con, $_POST["firstname"]);
$lastname = mysqli_real_escape_string($con, $_POST["lastname"]);
$email = mysqli_real_escape_string($con, $_POST["email"]);
$pwd = md5(
    mysqli_real_escape_string(
        $con,
        $_POST["pwd"]
    )
);

if ($fileUploaded) {
    $sql = "INSERT INTO users(firstname, lastname, email, pwd, profile_img) VALUES('$firstname', '$lastname', '$email', '$pwd', '$fileUploaded')";
} else {
    $sql = "INSERT INTO users(firstname, lastname, email, pwd) VALUES('$firstname', '$lastname', '$email', '$pwd')";
}

if (mysqli_query($con, $sql)) {
    header("Location: ./index.php");
    exit();
}
