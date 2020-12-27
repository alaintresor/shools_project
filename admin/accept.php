<?php
include "../connection.php";
$id = $_GET['id'];
$query = "UPDATE `schools` SET `status`='active' WHERE `id`='$id'";
$done = mysqli_query($connect, "$query");
if ($done) {
    echo "<script>alert(' Accepted!');window.open('allowed_school.php','_self')</script>";
} else {
    echo "Error";
}
