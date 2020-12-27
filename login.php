<?php
session_start();
include "connection.php";
if (isset($_GET['id'])) {

  $_SESSION['schoolId'] = $_GET['id'];
}

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM `student` WHERE `email`='$email' AND `password`='$password';";
  $data = mysqli_query($connect, "$query");
  if (mysqli_num_rows($data)) {
    $row = mysqli_fetch_array($data);

    $_SESSION['userId'] = $row[0];
    $_SESSION['username'] = "$row[1] $row[2]";
    header("location:student/index.php");
  } else {
    echo "<script>alert('Wrong email or password')</script>";
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
  <!-- Css Styles -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
  <div class="container ">
    <div class="row">
      <!--<div class="col-md-12 col-sm-12 col-xs-12 center" style="padding:12px"> -->



      <div class="col-md-3 col-sm-3 col-xs-3 "></div>
      <div class="col-md-6 col-sm-6 col-xs-6 ">
        <center>
          <h1>Login to Apply</h1>
        </center>
        <form class="jumbotron" id="login" method="post" action="#">
          <p class="text-center" style="background: darkgreen;color: white">Login to Apply</p>
          <div class="form-group">
            <label for="username">Email:</label>
            <input type="email" class="form-control" placeholder="Enter username" required='' name="email">
          </div>
          <div class="form-group">
            <label for="password">password:</label>
            <input type="password" class="form-control" required='' placeholder="Enter password" name="password">
          </div>
          <div class="form-group">
            <input type="submit" style="background: cyan;color: white" class="btn " value="Login" name="login">
            Not Register? ,<a href="signUp.php" class="btn">Register here</a>
          </div>
        </form>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-3 "></div>
    </div>
  </div>
</body>

</html>