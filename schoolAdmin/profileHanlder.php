<?php
session_start();
if (!isset($_SESSION['schoolId'])) {
    header("location:../index.php");
}
include "../connection.php";

if (isset($_POST["done"])) {
    $id = $_SESSION['schoolId'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $fac = $_POST['fac'];
    $compuse = $_POST['compuse'];

    $img = "img/" . $_FILES['file']['name'];
    $target_dir = "../../img/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {

        $query = "UPDATE `schools` SET `name`='$name',`welcome_msg`='$message',`facilities`='$fac',`compuses`='$compuse',`logo`='$img' WHERE `id`='$id'";

        $done = mysqli_query($connect, "$query");

        if ($done) {
            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name);
            echo "<script>alert('Profile updated');window.open('index.php','_self');</script>";
        } else {
            echo "Error:" . mysqli_error($connect);
        }
    } else {

        echo "Error:" . mysqli_error($connect);
    }
}
