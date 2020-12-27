<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header("location:../index.php");
}
include "../connection.php";

if (isset($_POST["done"])) {
    $id = $_SESSION['userId'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    $query = "UPDATE `student` SET `fname`='$fname',`lname`='$lname',`email`='$email' WHERE `id`='$id'";

    $done = mysqli_query($connect, "$query");

    if ($done) {

        echo "<script>alert('Profile updated');window.open('index.php','_self');</script>";
    } else {
        echo "Error:" . mysqli_error($connect);
    }
}
