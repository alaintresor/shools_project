<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header("location:../schools.php");
}
include "../connection.php";
$id = $_SESSION['userId'];
$username = $_SESSION['username'];

//get all user Informations
$sql = "SELECT * FROM `student` WHERE `id`='$id'";
$userInfor = mysqli_fetch_array(mysqli_query($connect, "$sql"));
//get all available schools
$query = "SELECT * FROM `schools` WHERE `status`='active'";
$data = mysqli_query($connect, "$query");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student admin panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Student</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="../index.html"><i class="fa fa-home fa-fw"></i> Website</a></li>
            </ul>

            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown navbar-inverse">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $username; ?> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="setting.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Students<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="new_application.php">New Application</a>
                                </li>
                                <li>
                                    <a href="my_applications.php">My Applications</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Make Application</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Application Form
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST" action="submit_application.php" enctype='multipart/form-data'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p style="color: blue;">Personal Informations</p>
                                            <div class="form-group">
                                                <label>Firstname</label>
                                                <input type="disable" class="form-control" name="fname" value="<?php echo $userInfor[1] ?>" placeholder="Enter Firstname">

                                            </div>
                                            <div class="form-group">
                                                <label>Lastname</label>
                                                <input class="form-control" name="lname" value="<?php echo $userInfor[2] ?>" placeholder="Enter lastname">

                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select name="gender" class="form-control">
                                                    <option value="">....</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Birth Date</label>
                                                <input type="date" class="form-control" name="bd" value="" required="">

                                            </div>
                                            <div class="form-group">
                                                <label>Father names</label>
                                                <input type="text" class="form-control" name="father" value="" required="">

                                            </div>
                                            <div class="form-group">
                                                <label>Mother names</label>
                                                <input type="text" class="form-control" name="mother" value="" required="">

                                            </div>
                                            <div class="form-group">
                                                <label>ID number</label>
                                                <input type="text" class="form-control" name="idNber" value="" required="" maxlength="16" minlength="16">

                                            </div>
                                            <div class="form-group">
                                                <label>Email </label>
                                                <input type="email" class="form-control" name="email" value="<?php echo $userInfor[3] ?>" required="">

                                            </div>
                                            <div class="form-group">
                                                <label>Phone number</label>
                                                <input type="text" class="form-control" name="phone" value="" required="">

                                            </div>

                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            <p style="color: blue;">School Informations</p>
                                            <div class="form-group">
                                                <label>School</label>
                                                <select name="school" class="form-control" id="school" onchange="facilities()">
                                                    <option value="">....</option>
                                                    <?php
                                                    while ($row = mysqli_fetch_array($data)) {
                                                        echo "<option value='$row[0]'>$row[2]<?/option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Option</label>
                                                <select name="fac" class="form-control" id="fact">
                                                    <option value="">....</option>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>category</label>
                                                <select name="compuse" class="form-control">
                                                    <option value="">....</option>
                                                    <option>Boarding</option>
                                                    <option>External</option>
                                                </select>
                                            </div><br><br>

                                            <p style="color: blue;">Required Documents</p>


                                            <div class="form-group">
                                                <label>Photo passport</label>
                                                <input type="file" class="form-control" name="photo" required>

                                            </div>
                                            <div class="form-group">
                                                <label>ID copy</label>
                                                <input type="file" class="form-control" name="ID" required>

                                            </div>
                                            <div class="form-group">
                                                <label>Diplome</label>
                                                <input type="file" class="form-control" name="diplome" required>

                                            </div>




                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <button type="submit" class="btn btn-outline btn-primary" name="done">Submit</button>
                                    <a href="index.php"><button type="button" class="btn btn-outline btn-warning">Cancle</button></a>
                                    <!-- /.row (nested) -->
                                </form>
                                <!-- /.Form  -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>

    <script>
        //get facilities for spicific school
        const facilities = () => {
            let item = $("#school").val();

            $.ajax({
                url: "getFacilities.php",
                method: "POST",
                data: {
                    item
                },
                success: function(data) {

                    $("#fact").html(data);

                }
            })

        }
    </script>

</body>

</html>