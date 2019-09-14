<?php

	include "server.php";
	
?>


<!DOCTYPE html>
<html lang="zxx">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>::. Welcome to MeetUp-Career .::</title>
		<link rel="shortcut icon" href="images/favicon.png">
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
		<!-- Owl-coursel -->
		<link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.theme.css">
		<link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.transitions.css">
		<!-- Font-awesome -->
		<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<!-- Animate -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<!-- Css -->
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<!-- Style -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body id="education">
		<div class="preloader">
			<i class="fa fa-spinner"></i>
		</div>
		<header class="header-fixed">
			<div class="top-header bg-4f84c4">
				<div class="container">
					<div class="row">
						<div class="col-md-6 d-none d-md-block">
							<ul class="list-top">
								<li><i class="fa fa-phone m-r-5"></i>+234-706-3000-971</li>
								<li><i class="fa fa-envelope-o m-r-5"></i>info@meetupcareers.com</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="float-right list-top">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a style="color: white; display: none;" href="#"><?php echo $_SESSION['email'];?></a></li>

								<form action="includes/functions.php" method="get">
								<li><button name="lgout" style="color: white; float: right; text-decoration: bold; display: none;">LOGOUT</button></li>
								</form>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="main-header">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xs-6 col-sm-3">
							<a href="index.html" class="logo">
								<img src="images/e-logo.jpg" alt="image">
							</a>
						</div>
						<div class="col-xs-4 col-sm-9 hidden-md hidden-lg">
							<nav id="holder_mn" class="menu-nav pull-right">
								<div class="menu-btn"></div>
								<ul class="menu">
									<li>
										<a href="need-a-mentor.php">Need a Mentor?</a>
									</li>
									<li>
										<a href="professional-registration.php">Become a Mentor</a>
									</li>
									<li>
										<a href="login.php">Sign In</a>
									</li>
									<li>
										<a href="#">Literature Review</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="banner m-b-0">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item bg-f2552c active">
						<div class="card">
							<div class="card-img-overlay text-left">
								<div class="container">
									<div class="row align-items-center">
										<div class="col-lg-6">
											<h4>Get Connected with</h4>
											<h1 class="card-title main-font">Senior Experts!</h1>
											<p class="card-text">Meet-Up Career connects senior experts / experienced professionals with early career in virtual touch for a...</p>
											<div class="card-btn-group">
												<a href="#" class="btn btn-lg bg-f">Read more</a>
												<a href="#" class="btn btn-lg btn-bor-f">Connect</a>
											</div>
										</div>
										<div class="col-lg-6">
											<img src="images/e10.png" alt="image">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item bg-422db9">
						<div class="card">
							<div class="card-img-overlay text-left">
								<div class="container">
									<div class="row align-items-center">
										<div class="col-lg-6">
											<h4>Are you an Upcoming</h4>
											<h1 class="card-title main-font">Researcher? </h1>
											<p class="card-text">Are you an upcoming/early-career researcher, professional or graduate looking for more...</p>
											<div class="card-btn-group">
												<a href="#" class="btn btn-lg bg-f">Meet-up Now!</a>
												<a href="#" class="btn btn-lg btn-bor-f">Register</a>
											</div>
										</div>
										<div class="col-lg-6">
											<img src="images/e8.png" alt="image">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="thumb card-group-2 bg-f5">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="shap-hexa shap-hexa-f5">
								<div class="shap-hexa shap-hexa-line">
									<i class="fa fa-graduation-cap"></i>
								</div>
							</div>
							<div class="card-body">
								<h4 class="card-title">
									<a href="#">Academic Exellence</a>
								</h4>
								<p>Meet-Up Career creates enabling environment that help individual researchers</p>
								<a href="#" class="btn bg-4f84c4">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card bg-4f84c4">
							<div class="shap-hexa shap-hexa-f5">
								<div class="shap-hexa shap-hexa-line">
									<i class="fa fa-globe color-3"></i>
								</div>
							</div>
							<div class="card-body">
								<h4 class="card-title">
									<a href="#">Get Connected</a>
								</h4>
								<p>The goal is to provide an opportunity for mentees to gain insight into career paths and professional growth</p>
								<a href="#" class="btn bg-f">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<div class="shap-hexa shap-hexa-f5">
								<div class="shap-hexa shap-hexa-line">
									<i class="fa fa-group"></i>
								</div>
							</div>
							<div class="card-body">
								<h4 class="card-title">
									<a href="#">Become a mentor</a>
								</h4>
								<p>Are you an experienced researcher or practitioner who can provide mentoring assistance to upcoming individuals?</p>
								<a href="#" class="btn bg-4f84c4">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="m-b-20">
			<div class="container">
				<div class="card">
					<div class="row">
						<div class="col-md-6">
							<div class="card-body p-0">
								<h2 class="card-title f-45">Research Simplified</h2>
								<h4 class="card-subtitle">Join Today &amp; Get Imparted</h4>
								<p>The objective is to support graduate and early career or newly academics in their professional and personal development by connecting them with more experienced individuals who can share knowledge, advise, guide, coach and support</p>
								<ul class="list-sp">
									<li>
										<a href="#" class="bg-5">
											<i class="fa fa-dot-circle-o m-r-5"></i>Programing - Over 300 courses
										</a>
									</li>
									
									<li>
										<a href="#" class="bg-4f84c4">
											<i class="fa fa-dot-circle-o m-r-5"></i>Resources - Over 50 Mentees
										</a>
									</li>
									<li>
										<a href="#" class="bg-f2552c">
											<i class="fa fa-dot-circle-o m-r-5"></i>Research Papers - Over 30 Papers
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<img src="images/e4.png" alt="image">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="card-group-2 card-padd-15 text-left card-fd">
			<div class="container">
				<div class="block-title">
					<h2 class="line-default">How It Works</h2>
					<p>In learning you will teach, and in teaching you will learn. - Phill Collins</p>
				</div>
				<div class="row">
					<div class="col-md-6 d-none d-md-block">
						<img src="images/e7.png" alt="image" class="w-100">
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="media m-b-0">
								<div class="media-icon icon-rec">
									<i class="fa fa-tasks"></i>
								</div>
								<div class="media-body">
									<h3>Register on Meet-Up Career</h3>
									<p class="m-b-0">Register on the platform to connect your world.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="media m-b-0">
								<div class="media-icon icon-rec">
									<i class="fa fa-rocket"></i>
								</div>
								<div class="media-body">
									<h3>Become a Mentor/Mentee</h3>
									<p class="m-b-0">Get empowered and also empower other people</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="media m-b-0">
								<div class="media-icon icon-rec">
									<i class="fa fa-life-buoy"></i>
								</div>
								<div class="media-body">
									<h3>Meet a Mentor</h3>
									<p class="m-b-0">Gain Insight into your academic and career path</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="media m-b-0">
								<div class="media-icon icon-rec">
									<i class="fa fa-life-buoy"></i>
								</div>
								<div class="media-body">
									<h3>Research Papers</h3>
									<p class="m-b-0">Get Unlimited access to professional research papers </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="card-group-2 text-left bg-f5 m-b-0">
			<div class="container">
				<div class="block-title">
					<h2 class="line-default">From Blog</h2>
					<p>Get updated and insightful articles from our blog page. </p>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<img src="images/blog-img1.jpg" alt="image">
							<div class="card-body">
								<h4 class="card-title"><a href="#">Join the Meet-Up team</a></h4>
								<p class="card-date">January 12, 2019</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="images/blog-img2.jpg" alt="image">
							<div class="card-body">
								<h4 class="card-title"><a href="#">Mentorship in I.T</a></h4>
								<p class="card-date">January 15, 2019</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="images/blog-img3.jpg" alt="image">
							<div class="card-body">
								<h4 class="card-title"><a href="#">Get Professional Papers</a></h4>
								<p class="card-date">January 19, 2019</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<h3>Contact</h3>
							<p>Covenant Universtiy</p>
							<ul class="list">
								<li><a href="#">Sango Otta , Ogun State</a></li>
								<li><a href="#">+234-706-3000-971</a></li>
								<li><a href="#">info@meetupcareers.com</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-2">
							<h3>About</h3>
							<ul>
								<li><a href="about-us.html">About us</a></li>
								<li><a href="#">Mentors</a></li>
								<li><a href="#">Mentees</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="#">Help center</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-2">
							<h3>Commulity</h3>
							<ul>
								<li><a href="#">Discussions</a></li>
								<li><a href="#">Events</a></li>
								<li><a href="#">Guidelines</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-4">
							<h3>Newsletter</h3>
							<p>Get latest updates and news from Meet-Up Career</p>
							<form action="server.php" method="post" class="form-group">
								<input type="text" class="form-control" name="email" placeholder="Enter your email">
														<input type="submit" name="subscribe" Value="Subscribe" class="btn m-t-15">
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<p class="f-15">&nbsp;2019. All rights reserved - Meet-Up Careers| Designed by <a href="#">e-world</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- jQuery -->
		<script src="js/jquery/jquery-2.2.4.min.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap/popper.min.js"></script>
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<!-- Owl-coursel -->
		<script src="js/owl-coursel/owl.carousel.js"></script>
		<!-- Script -->
		<script src="js/script.js"></script>
	</body>

</html>