<?php
include "../connection.php";
$id = $_GET['id'];
$query = "UPDATE `schools` SET `status`='inactive' WHERE `id`='$id'";
$done = mysqli_query($connect, "$query");
if ($done) {
    echo "<script>alert(' denied!');window.open('new_application.php','_self')</script>";
} else {
    echo "Error";
}
