<?php

//connting to database
include "connection.php";

//make query for displaying shools
$query = "SELECT * FROM `schools`";
$data = mysqli_query($connect, "$query");

?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <!-- <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Home | ...</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

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
    <!-- Page Preloder -->
   
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
       
       
        <div class="humberger__menu__widget">
          
            <div class="header__top__right__auth">
                <a href="login.php"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
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
                                <a href="login.php"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="div_header mb-2" style="background-color:darkgreen; height: 70px ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="active" style="color: white"><a href="index.html" style="color: white" >Home</a></li>
                                <li ><a href="shools.php" style="color: white">Shools</a></li>
                                <li><a href="./about.html" style="color: white">About Us</a></li>
                                <li><a href="./contact.html" style="color: white">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Header Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Partener Shools</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".paintings"> O'Level</li>
                            <li data-filter=".photo">A'Level</li>
                            <li data-filter=".photo">TVET</li>
                           

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter" style="background-color: white;">

                <!-- displaying schools here -->
                <?php
                while ($row = mysqli_fetch_array($data)) {
                    echo "
            <div class='col-lg-3 col-md-4 col-sm-6 mix photo'>
                    <a href='login.php?id=$row[0]'>
                        <div class='featured__item'>
                            <div class='featured__item__pic set-bg' data-setbg='$row[5]'>

                            </div>
                            <div class='featured__item__text'>
                                <h6>$row[2]</h6>

                            </div>
                        </div>
                    </a>
                </div>
            ";
                }
                ?>
                  <!-- displaying schools here -->
                <?php
                while ($row = mysqli_fetch_array($data)) {
                    echo "
            <div class='col-lg-3 col-md-4 col-sm-6 mix paintings'>
                    <a href='login.php?id=$row[0]'>
                        <div class='featured__item'>
                            <div class='featured__item__pic set-bg' data-setbg='$row[5]'>

                            </div>
                            <div class='featured__item__text'>
                                <h6>$row[2]</h6>

                            </div>
                        </div>
                    </a>
                </div>
            ";
                }
                ?>
            </div>

        </div>
    </section>
    <!-- Featured Section End -->



    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                        </div>
                        <ul>
                            <li>Address: kn 204 kigali</li>
                            <li>Phone: +250780591269</li>
                            <li>Email: yvetto@email.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                           
                            <li><a href="#">Privacy Policy</a></li>
                            
                        </ul>
                        <ul>
                           
                            <li><a href="#">Contact</a></li>
                       
                     
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                      
                      
                        <div class="footer__widget__social">
                            <a href="#" style="background: darkgreen;color: white"><i class="fa fa-facebook"></i></a>
                            <a href="#" style="background: darkgreen;color: white"><i class="fa fa-instagram"></i></a>
                            <a href="#" style="background: darkgreen;color: white"><i class="fa fa-twitter"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright text-center">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved 2020 <b>
                            
                        </b>
                    </div>
                </div>
            </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>