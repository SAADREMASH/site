<?php

include_once("../includes/db.inc.php");


$email = $_POST["login"];
$mdp = md5($_POST["pw"]);


$sql = "select * from users where email='$email' and pwd='$mdp'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION["id"] = $row["id"];
    $_SESSION["profile_img"] = $row["profile_img"];
    header("location: ../welcome.php");
    exit();
} else {
    header("location: ../index.php?message:error");
    exit();
}
