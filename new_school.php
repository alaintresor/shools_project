<?php
include "connection.php";

if (isset($_POST['done'])) {
    $schoolName = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO `schools` (`id`, `name`, `email`, `password`, `status`) VALUES (NULL, '$schoolName', '$email','$password', 'inactive');";
    $isDone = mysqli_query($connect, "$query");
    if ($isDone) {
        $selectId = mysqli_query($connect, "SELECT * FROM `schools` WHERE `email`='$email' AND `password`='$password';");
        $data = mysqli_fetch_array($selectId);
        session_start();
        $_SESSION['schoolId'] = $data[0];
        $_SESSION['schoolname'] = $data[1];
        header("Location:schoolAdmin/index.php");
    } else {
        echo "error";
    }
}
