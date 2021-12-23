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
				<div class="imgBx">
					<img src="<?php echo base_url('assets/img/cycling1.png'); ?>" alt="" />
				</div>
				<div class="formBx text-center justify-content-center">
					<form action="<?php echo base_url('login'); ?>" method="post" onsubmit="return;">
						<h2 class="alert alert-success" ><?php echo $this->session->flashdata('login'); ?></h2>
						<h2>Sign In</h2>
						<input type="text" name="email" placeholder="Email ID/User ID" />
						<input type="password" name="password" placeholder="Password" />
						<input type="submit" name="" value="Login" />
						<p class="signup">Don't have an account ?
							<a href="#" onclick="toggleForm();">Sign Up.</a>
						</p>
					</form>
				</div>
			</div>
			<div class="user signupBx">
				<div class="formBx text-center justify-content-center">
					<ul class="nav nav-tabs tabs-marker register-tab" id="myTab" role="tablist">
					  <li class="nav-item">
						 <a class="nav-link active" id="home" data-toggle="tab" href="#home-tab2" role="tab" aria-controls="home" aria-selected="true">Company<span class="marker"></span></a>
						  
					  </li>
					  <li class="nav-item">
						 <a class="nav-link" id="profile" data-toggle="tab" href="#profile-tab2" role="tab" aria-controls="profile" aria-selected="false">Employee<span class="marker"></span></a>
					  </li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home-tab2" role="tabpanel" aria-labelledby="home-tab">
							<form action="<?php echo base_url('Home/company_login'); ?>" onsubmit="return;" method="POST">
								<h2>Login</h2>
								<input type="email" name="email" placeholder="Company Email ID" />
								<input type="Number" name="p_number" placeholder="Phone Number" />
								<input type="submit" name="" value="Sign Up" />
								<p class="signup"> Already have an account ?
									<a href="#" onclick="toggleForm();">Sign in.</a>
								</p>
							</form>
						</div>
						<div class="tab-pane fade" id="profile-tab2" role="tabpanel" aria-labelledby="profile-tab">
							<form action="" onsubmit="return false;">
								<h2>Login</h2>
								<input type="email" name="" placeholder="Personal Email ID" />
								<input type="Number" name="" placeholder="Phone Number" />
								<input type="submit" name="" value="Sign Up" />
								<p class="signup"> Already have an account ?
									<a href="#" onclick="toggleForm();">Sign in.</a>
								</p>
							</form>
						</div>
					</div>
					
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
	
	
	<script>
		const toggleForm = () => {
		const container = document.querySelector('.container');
		container.classList.toggle('active');
		};
	</script>
	
	
</body>
</html>