<?php
include "connection.php";
$userId = $_GET['id'];
// $schoolId=$_GET['schoolId'];
$query = "SELECT * FROM `student` WHERE `id`='$userId';";
$data = mysqli_query($connect, "$query");
$userInfor = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  <!-- Theme color -->
  <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
</head>

<body>
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
       
       
        <div class="humberger__menu__widget">
          
            <div class="header__top__right__auth">
                <a href="login.php"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="shools.php">Shools</a></li>
                <li><a href="./contact.html">About Us</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>

        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> yvetto@info.com</li>
                <li></li>
            </ul>
        </div>
    </div>


    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top" style="background:white ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> yvetto@info.com</li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>

                            </div>
                           
                            <div class="header__top__right__auth">
                                <a href="login.php"><i class="fa fa-user"></i><?php echo "$userInfor[1] $userInfor[2]"; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="div_header mb-2" style="background-color:darkgreen; height: 50px ">

    <div class="container" >



      <div style="display: flex;">
        <h5 style="color: white;"></h5>
        <p style="flex: 1; " align="right">
          <h5 style="color:white;">Logout</h5>
        </p>

      </div>

    </div>

            </div>
        </div>
    </header>
    <!-- Header Section End -->
 
  <br><br><br>
  <div class="container">
      <div class="row">
  <div class="col-md-4">
    <p>
      <h4 class=" header-line">Application Form</h4>
    </p>
    <div class="panel panel-info">
      <div class="panel-heading" style="background: cyan;color: white">
        Student Information
      </div>
      <div class="panel-body">
        <form method="post" action="add_product.php" enctype='multipart/form-data'>

          <div class="form-group">
            <label for="firstname">Product name:</label>
            <input type="text" class="form-control" required='' name="name" placeholder="Enter product name">
          </div>
          <div class="form-group">
            <label for="firstname">Product Quantity:</label>
            <input type="text" class="form-control" required='' name="qty" placeholder="Enter product qty">
          </div>
          <div class="form-group">
            <label for="firstname">Product Unit price:</label>
            <input type="text" class="form-control" required='' name="u_price" placeholder="Enter product U/P">
          </div>
          <div class="form-group">
            <label for="firstname">Product Description:</label>
            <input type="text" class="form-control" required='' name="desc" placeholder="Enter Description">
          </div>
          <div class="form-group">
            <label for="firstname">Product Image:</label>
            <input type="file" class="form-control" required='' name="file">
          </div>
          <div class="form-group">
            <label for="gender">Category:</label>
            <select class="form-control" name="category">
              <option class="disabled">......</option>

            </select>
          </div>
          <div class="form-group">
            <label for="gender">Owner Id:</label>
            <select class="form-control" name="owner">
              <option class="disabled">......</option>

            </select>
          </div>


          <div class="form-group">
            <input type="submit" class="btn btn-primary from-control" value="Add" name="done">
          </div>

        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4">
     <p>
      <h4 class=" header-line">Application Form</h4>
    </p>
    <div class="panel panel-info" >
      <div class="panel-heading" style="background: cyan;color: white">
        Documents
      </div>
      <div class="panel-body">
        <form method="post" action="add_product.php" enctype='multipart/form-data'>
          <div class="form-group">
            <label for="firstname">Document 1:</label>
            <input type="file" class="form-control" required='' name="file">
          </div>
          <div class="form-group">
            <label for="firstname">Document 2:</label>
            <input type="file" class="form-control" required='' name="file">
          </div>
           <div class="form-group">
            <label for="firstname">Document 3:</label>
            <input type="file" class="form-control" required='' name="file">
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-primary from-control" value="Add" name="done">
          </div>

        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4">
     <p>
      <h4 class=" header-line"> <p>Payment Form</p></h4>
    </p>
    <div class="panel panel-info">
      <div class="panel-heading" style="background: cyan;color: white">
        Product Info
      </div>
      <div class="panel-body">
        <form method="post" action="add_product.php" enctype='multipart/form-data'>

          <div class="form-group">
            <label for="firstname">Names:</label>
            <input type="text" class="form-control" required='' name="name" placeholder="Enter product name">
          </div>
          <div class="form-group">
            <label for="firstname">Amount:</label>
            <input type="text" class="form-control" required='' name="qty" value="10,000" placeholder="">
          </div>
          <div class="form-group">
            <label for="firstname">Tel:</label>
            <input type="text" class="form-control" required='' name="u_price" placeholder="Enter product U/P">
          </div>
        


          <div class="form-group">
            <input type="submit" class="btn btn-primary from-control" value="Add" name="done">
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
   
  </div>

</body>

</html>