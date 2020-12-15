<?php
include "connection.php";
if (isset($_GET['id'])) {
    $schoolId = $_GET['id'];
}

if (isset($_POST['signup'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO `student` (`id`, `fname`, `lname`, `username`, `password`) VALUES (NULL, '$fname', '$lname', '$username', '$password');";
    $done = mysqli_query($connect, "$query");
    if ($done) {
        echo "<script>alert('Account created successfuly')</script>";
        header("location:student.php");
    } else {
        echo "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Farm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">
    <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/css.css">
</head>

<body>
    <div class="container ">
        <div class="row">
            <!--<div class="col-md-12 col-sm-12 col-xs-12 center" style="padding:12px"> -->



            <div class="col-md-3 col-sm-3 col-xs-3 "></div>
            <div class="col-md-6 col-sm-6 col-xs-6 ">
                <center>
                    <h1>Student Page</h1>
                </center>
                <form class="jumbotron" id="login" method="post" action="#">
                    <p class="text-center">Student Sign Up</p>
                    <div class="form-group">
                        <label for="username">First Name:</label>
                        <input type="text" class="form-control" placeholder="Enter your firstname" required='' name="fname">
                    </div>
                    <div class="form-group">
                        <label for="username">Last Name:</label>
                        <input type="text" class="form-control" placeholder="Enter your lastname" required='' name="lname">
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" placeholder="Enter username" required='' name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">password:</label>
                        <input type="password" class="form-control" required='' id="pwd" placeholder="Enter password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm password:</label>
                        <input type="password" class="form-control" required='' id="cpwd" placeholder="Enter password again to confirm it" name="cpassword">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary from-control" value="Sign Up" name="signup">
                        <a href='login.php' class="btn">Already have Account?,Login here</a>
                    </div>

                </form>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 "></div>

        </div>

    </div>
</body>

</html>