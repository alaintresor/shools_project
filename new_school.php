<?php
include "connection.php";

$query = "SELECT * FROM mineduc";
$data = mysqli_query($connect, "$query");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
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
            <div class="col-md-3 col-sm-3 col-xs-3 "></div>
            <div class="col-md-6 col-sm-6 col-xs-6 ">
                <center>
                    <h2>Register New School</h2>
                </center>
                <form class="jumbotron" id="login" method="post" action="schoolSignUp.php">
                    <p class="text-center" style="background: darkgreen;color:white">Sign Up</p>
                    <div class="form-group">
                        <label for="username">Choose your school:</label>
                        <select class="form-control" name="name">
                            <option>.............</option>
                            <?php
                            while ($result = mysqli_fetch_array($data)) {
                                echo "<option>" . $result[2] . "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="email" class="form-control" placeholder="Enter email address" required='' name="email">
                    </div>
                    <div class="form-group">
                        <label for="username">Password</label>
                        <input type="password" class="form-control" placeholder="Enter your password" required='' name="password">
                    </div>

                    <div class="form-group">
                        <label for="password">Confirm password:</label>
                        <input type="password" class="form-control" required='' id="cpwd" placeholder="Enter password again to confirm it" name="cpassword">
                    </div>
                    <div class="form-group">
                        <input type="submit" style="background: cyan;color: white" class="btn" value="Sign Up" name="done">
                        Already have Account?,<a href='schoolLogin.html'>Login here</a>
                    </div>

                </form>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 "></div>

        </div>

    </div>
</body>

</html>