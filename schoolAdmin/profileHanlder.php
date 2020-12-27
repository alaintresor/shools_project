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
    $loc = $_POST['location'];
    $type = $_POST['type'];
    $level = $_POST['level'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if (isset($_FILES['file'])) {
        $img = "img/" . $_FILES['file']['name'];
        $imgName = $_FILES['file']['name'];
        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg", "jpeg", "png", "gif");

        // Check extension
        if (in_array($imageFileType, $extensions_arr)) {

            $query = "UPDATE `schools` SET `name`='$name',`school_type`='$type',`school_location`='$loc',`school_level`='$level',`welcome_msg`='$message',`email`='$email',`options`='$fac',`category`='$compuse',`logo`='$img',`phone` = '$phone' WHERE `schools`.`id` = '$id';";

            $done = mysqli_query($connect, "$query");

            if ($done) {
                move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $imgName);
                echo "<script>alert('Profile updated');window.open('index.php','_self');</script>";
            } else {
                echo "Error:" . mysqli_error($connect);
            }
        } else {

            echo "Error:" . mysqli_error($connect);
        }
    } else {


        $query = "UPDATE `schools` SET `name`='$name',`school_type`='$type',`school_location`='$loc',`school_level`='$level',`welcome_msg`='$message',`options`='$fac',`category`='$compuse',`phone` = '$phone' WHERE `id`='$id'";

        $done = mysqli_query($connect, "$query");

        if ($done) {
            echo "<script>alert('Profile updated');window.open('index.php','_self');</script>";
        } else {
            echo "Error:" . mysqli_error($connect);
        }
    }
}
