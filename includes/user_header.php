<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])) {
    header("location:./index.php");
    exit();
}
else {
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
    $user_id = $_SESSION['user_id'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>
        <?php if($section == "user dashboard") {echo "User DashBoard"; } ?>
        <?php if($section == "profile") {echo "User DashBoard"; } ?>
        <?php if($section == "buy or sell") {echo "User DashBoard"; } ?>
        <?php if($section == "order details") {echo "User DashBoard"; } ?>
        <?php if($section == "sale order details") {echo "User DashBoard"; } ?>
        <?php if($section == "add testimonial") {echo "User DashBoard"; } ?>
        <?php if($section == "about") {echo "About"; } ?>
        <?php if($section == "contact") {echo "Contact"; } ?>
        <?php if($section == "services") {echo "Services"; } ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/w3.css">

    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="facebox/facebox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.devrama.slider.js"></script>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.js"></script>
    <![endif]-->

    <link href="css/style.css" rel="stylesheet">

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('a[rel*=facebox]').facebox({
                loadingImage : 'facebox/loading.gif',
                closeImage   : 'facebox/closelabel.png'
            })
        })
    </script>
</head>
<body>

    <div class="container nav_container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  
				  <a href="index.php" class="navbar-brand">
                        <div id="logo">
                            <img src="img/logo.png" style="width: 100%;">
                        </div>
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="navbar">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"></li>
                        <li><a href="#"><?php echo @$fname." ".@$lname; ?></a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>


<div class="navbar-wrapper nav_wrapper_user">
    <div class="container nav_container_user">
        <nav class="navbar navbar-default navbar_default_user">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar2">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"></li>
                        <li class="<?php if($section == "user dashboard"){echo "active_user_dashboard "; } ?>"><a href="user_dashboard.php">DashBoard</a></li>
                        <li class="<?php if($section == "profile"){echo "active_user_dashboard "; } ?>"><a href="profile.php">View Profile</a></li>
                        <li class="<?php if($section == "ph"){echo "active_user_dashboard "; } ?> dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Provide Help <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="ph.php">Provide Help</a></li>
                                <li><a href="ph_history.php">Provide Help Transactions</a></li>
                            </ul>
                        </li>
                        <li class="<?php if($section == "gh"){echo "active_user_dashboard "; } ?> dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Get Help <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="gh.php">Get Help</a></li>
                                <li><a href="gh_history.php">Get Help Transactions</a></li>
                            </ul>
                        </li>
                        <li class="<?php if($section == "complaint"){echo "active_user_dashboard "; } ?>"><a href="complaint.php">Lodge A Complaint</a></li>
                        <li class="<?php if($section == "add testimonial"){echo "active_user_dashboard "; } ?>"><a href="add_testimonial.php">Testimonial</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</div>