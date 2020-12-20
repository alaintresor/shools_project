<?php
include "../connection.php";
$id = $_GET['id'];
$query = "UPDATE `applications` SET `status`='yes' WHERE `id`='$id'";
$done = mysqli_query($connect, "$query");
if ($done) {
    echo "<script>alert('Application Accepted!');window.open('new_application.php','_self')</script>";
} else {
    echo "Error";
}
