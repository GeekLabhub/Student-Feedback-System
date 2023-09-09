<?php
session_start();
 require('dbconfig.php'); ?>

<!DOCTYPE HTML>

<html>
	<head>
    <link rel="icon" type="image/png" href="images/favicon.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Online Faculty Feedback System</title>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
			$(document).ready(function() {
			$('#loginDropdown').click(function() {
				$('#loginOptions').toggle();
			});
			});
		</script>

	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">Welcome to <span> Online Faculty Feedback System</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">

				<ul class="links">

          <li style="color:#FFFFFF">
              <a style="color:#FFFFFF" href="index.php"><i class="fa fa-index fa-fw"></i>Home</a>
          </li>

          <li style="color:#FFFFFF">
              <a style="color:#FFFFFF" href="About1.php"><i class="fa fa-index fa-fw"></i>About</a>
          </li>

          <li style="color:#FFFFFF">
              <a style="color:#FFFFFF" href="Registration1.php"><i class="fa fa-index fa-fw"></i>Registration</a>
          </li>

          <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #FFFFFF; font-weight: bold;" id="loginDropdown"><i class="fa fa-sign-in fa-fw"></i>Login
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu" id="loginOptions" style="display: none;">
				<li><a href="Login1.php" style="color: #FFFFFF; font-weight: bold;">Student</a></li>
				<li><a href="Faculty_login1.php" style="color: #FFFFFF; font-weight: bold;">Faculty</a></li>
				<li><a href="admin_login.php" style="color: #FFFFFF; font-weight: bold;">Admin</a></li>
			</ul>
		  </li>
		  <!--<li style="color:#FFFFFF">
              <a style="color:#FFFFFF" href="contact.php"><i class="fa fa-index fa-fw"></i>Contact</a>
          </li>-->


				 </ul>
			</nav>


		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/image2.jpg" alt="" />
					<div class="inner">
						<header>
							<h2>Online Faculty Feedback</h2>
							<h2> System</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/bg3.jpeg" alt="" />
					<div class="inner">
            <header>
              <p>Creating</p>
              <h2>A new way to give feedback</h2>
            </header>

					</div>
				</article>
				<article>
					<img src="images/image4.jpg"  alt="" />
					<div class="inner">
            <header>
              <p>Our moto</p>
              <h2>We Make Communication</h2>
			<h2>Bridge </h2>
            </header>
					</div>
				</article>

			</section>






		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>



	</body>
</html>
