<?php
session_start();
include "connection.php";
if (isset($_GET['id'])) {

  $_SESSION['schoolId'] = $_GET['id'];
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM `student` WHERE `username`='$username' AND `password`='$password';";
  $data = mysqli_query($connect, "$query");
  if (mysqli_num_rows($data)) {
    $row = mysqli_fetch_array($data);

    $_SESSION['userId'] = $row[0];
    $_SESSION['username'] = "$row[1] $row[2]";
    header("location:student/index.php");
  } else {
    echo "<script>alert('Wrong username or password')</script>";
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
          <h1>Login to Apply</h1>
        </center>
        <form class="jumbotron" id="login" method="post" action="#">
          <p class="text-center" style="background: darkgreen;color: white">Login to Apply</p>
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" placeholder="Enter username" required='' name="username">
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