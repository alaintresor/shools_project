<?php
session_start();
if (!isset($_SESSION['schoolId'])) {
    header("location:../schools.php");
}
include "../connection.php";
$id = $_SESSION['schoolId'];
$choolName = $_SESSION['schoolname'];
$query = "SELECT * FROM `schools` WHERE `id`='$id'";
$data = mysqli_query($connect, "$query");
$schoolInfor = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School profiles</title>

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
                <a class="navbar-brand" href="index.html">School Admin</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="../index.htmt"><i class="fa fa-home fa-fw"></i> Website</a></li>
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
                        <i class="fa fa-user fa-fw"></i> <?php echo $choolName; ?> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
                            <a href="head_mastor.php"><i class="fa fa-user-md"></i> Head Mastor</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Students<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="new_application.php">New Application</a>
                                </li>
                                <li>
                                    <a href="allowed_students.php">Allowed Students</a>
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
                        <h1 class="page-header">Profile</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                School Informations
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" method="POST" action="profileHanlder.php" enctype='multipart/form-data'>
                                            <p><b>School Logo</b></p>
                                            <div class="row" id="upload" style="display: none;">
                                                <div class="col-lg-6">
                                                    <input id="file" type="text" name="file"></div>
                                                <div class="col-lg-6"> <button type="button" onclick="skip()">skip</button></div>
                                            </div>
                                            <div class="form-group" id="img">
                                                <img width="100" src="<?php echo "../$schoolInfor[8]" ?>"><br>
                                                <button type="button" onclick="image()">change</button>
                                            </div>
                                            <div class="form-group">
                                                <label>Full School Name</label>
                                                <input class="form-control" name="name" value="<?php echo $schoolInfor[2] ?>">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group">
                                                <label>School Email</label>
                                                <input type="email" class="form-control" name="email" value="<?php echo $schoolInfor[9] ?>" placeholder="Enter school Email Address">

                                            </div>
                                            <div class="form-group">
                                                <label>Telphone</label>
                                                <input class="form-control" name="phone" value="<?php echo $schoolInfor[10] ?>" placeholder="Enter school contact">

                                            </div>
                                            <div class="form-group">
                                                <label>school location</label>
                                                <textarea placeholder="Example:kigali,gasabo,gisozi,musezero,gasharu." class="form-control" name="location" rows="2"><?php echo $schoolInfor[13] ?></textarea>
                                                <p class="help-block"> </p>
                                            </div>

                                            <div class="form-group">
                                                <label>Welcome Message</label>
                                                <textarea class="form-control" name="message" rows="3"><?php echo $schoolInfor[3] ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>type</label>
                                                <select class="form-control" name="type">
                                                    <option>TVET</option>
                                                    <option>REB</option>

                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label>level</label>
                                                <textarea class="form-control" rows="" placeholder="example:L1,L2,L3" name="level"><?php echo $schoolInfor[5] ?></textarea>
                                                <p class="help-block">Make sure you seprect it with <b>,</b> </p>

                                            </div>
                                            <div class="form-group">
                                                <label>option</label>
                                                <textarea class="form-control" rows="2" placeholder="example:computer science,HEG,...." name="fac"><?php echo $schoolInfor[7] ?></textarea>
                                                <p class="help-block">Make sure you seprect it with <b>,</b> </p>
                                            </div>

                                            <div class="form-group">
                                                <label>Category</label>
                                                <textarea class="form-control" rows="2" name="compuse" placeholder="ex: boarding,external"><?php echo $schoolInfor[6] ?></textarea>
                                            </div>

                                            <button type="submit" class="btn btn-outline btn-primary" name="done">Save Change</button>
                                            <a href="index.php"><button type="button" class="btn btn-outline btn-warning">Cancle</button></a>
                                        </form>
                                    </div>

                                </div>
                                <!-- /.row (nested) -->
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
    <script>
        function image() {
            img.style.display = 'none';
            upload.style.display = 'block';
            file.type = 'file';
            skipBtn.style.display = 'block';
            file.required = '';
        }

        function skip() {
            img.style.display = 'block'
            upload.style.display = 'none';

            file.type = '';
        }
    </script>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>

</body>

</html>