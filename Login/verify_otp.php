<?php

session_start();

require "../config.php";

if (isset($_POST['submit'])) {

	$otp = $_POST['otp'];
    $sent = $_SESSION['sendotp'];

	if ($otp == $sent) {
        echo "<script>window.location.href = 'change_pass.php'</script>";
	} else {
		echo "<script>alert('Invaild OTP.')</script>";
	}
}

?>

<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>GPTM | Login</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="font/flaticon.css">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<div id="preloader" class="preloader">
		<div class='inner'>
			<div class='line1'></div>
			<div class='line2'></div>
			<div class='line3'></div>
		</div>
	</div>
	<div id="wrapper" class="wrapper">
		<div class="fxt-template-animation fxt-template-layout5">
			<div class="fxt-bg-img fxt-none-767" data-bg-image="img/figure/bg5-l.jpg">
				<div class="fxt-intro">
					<div class="sub-title">Welcome To</div>
					<h1>Our GPTM</h1>
					<p>Senior Students Association of Computer Science and Engineering. Government Polytechnic Mirle</p>
				</div>
			</div>
			<div class="fxt-bg-color">
				<div class="fxt-header">
					<a href="login.php" class="fxt-logo"><img src="img/logo-black.png" alt="Logo"></a>
					<div class="fxt-page-switcher">
						<a href="login.php" class="switcher-text switcher-text1 active">LogIn</a>
						<a href="register.php" class="switcher-text switcher-text2">Register</a>
					</div>
				</div>
				<div class="fxt-form">
					<form method="POST">
						<div class="form-group fxt-transformY-50 fxt-transition-delay-2">
							<input type="number" class="form-control" name="otp" placeholder="Verification Code" required="required">
							<i class="flaticon-envelope"></i>
						</div>
						<div class="form-group fxt-transformY-50 fxt-transition-delay-4">
							<button type="submit" name="submit" class="fxt-btn-fill">Verify OTP</button>
						</div>
					</form>
				</div>
				<div class="fxt-footer">
					<ul class="fxt-socials">
						<li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
						<li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-7"><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
						<li class="fxt-google fxt-transformY-50 fxt-transition-delay-8"><a href="#" title="google"><i class="fab fa-google-plus-g"></i></a></li>
						<li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-9"><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- jquery-->
	<script src="js/jquery-3.5.0.min.js"></script>
	<!-- Bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Imagesloaded js -->
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<!-- Validator js -->
	<script src="js/validator.min.js"></script>
	<!-- Custom Js -->
	<script src="js/main.js"></script>

</body>

</html>