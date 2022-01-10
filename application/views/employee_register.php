<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Brooch </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->

	<!-- CSS
	============================================ -->

<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url('assets/css/lnr-icon.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/slick-theme.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

</head>

<body>

	<!--======= Main body  =======-->
	<section>
		<div class="container">
			<div class="user signinBx">
				<div class="formBx text-center justify-content-center">
					<form action="<?php echo base_url('login'); ?>" method="post" onsubmit="return;">
						<h2>Employee Sign Up</h2>
						<input type="text" name="email" placeholder="Email ID/User ID" />
						<input type="text" name="tel" placeholder="Phone number" />
						<input type="password" name="password" placeholder="Password" />
						<input type="password" name="confirm_password" placeholder="Confirm Password" />
						<input type="submit" name="" value="Signup" />
						<p class="signup">Signed up already?
							<a href="#" onclick="toggleForm();">Login.</a>
						</p>
					</form>
				</div>
				<div class="imgBx">
					<img src="<?php echo base_url('assets/img/running.png'); ?>" alt="" />
				</div>
			</div>
		</div>
	</section>

	<!--=======  End Main body  =======-->
	
	<!--=======  Footer  =======-->
	
	
	<!--=======  End Footer  =======-->

<!-- JS
	============================================ -->
	<!-- jQuery JS -->
<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/slick.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/all.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/Chart.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/chart.js'); ?>"></script>

<script src="<?php echo base_url('assets/plugins/theia-sticky-sidebar/ResizeSensor.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
	

	
</body>
</html>