<?php
include "connection.php";

if (isset($_POST['done'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $selectId = mysqli_query($connect, "SELECT * FROM `schools` WHERE `email`='$email' AND `password`='$password';");
    if (mysqli_num_rows($selectId)) {
        $data = mysqli_fetch_array($selectId);
        session_start();
        $_SESSION['schoolId'] = $data[0];
        $_SESSION['schoolname'] = $data[2];

        header("Location:schoolAdmin/index.php");
    } else {
        echo "<script>alert('wrong password or username');history.go(-1)</script>";
    }
}
