<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url('assets/css/lnr-icon.css'); ?>">

<link rel="stylesheet" type='text/css' media='all'  href="<?php echo base_url('assets/css/all.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.bootstrap4.min.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/slick-theme.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
<title>Brooch</title>


</head>
<body>

<div class="inner-wrapper">
	
	<nav class="mnb navbar navbar-default">
		<div class="top-header-section">
			<div class="navbar-header">
				<div style="padding: 15px 0;">
					<a href="#" id="msbo"><i class="ic fa fa-bars"></i></a>
				</div>
			</div>
		</div>
		<div class="user-info align-right dropdown d-inline-flex header-dropdown">
			<div class="user-details">
				<h4><b>Welcome <?php echo (isset($data)) ? $data[0]['email'] : 'Admin' ; ?></b></h4>
			</div>
		</div>
	</nav>
	<div class="msb" id="msb">
		<nav class="navbar navbar-default" role="navigation">
				<div class="sidebar sidebar-user text-center shadow-sm">
					<h4 class="text-dark">Admin Dashboard</h4>
				</div>
		
				
			<!-- Main Menu -->
			<div class="side-menu-container">
				<?php if (isset($data)) { ?>
				<ul class="nav navbar-nav">
					<li class="<?php echo ($this->uri->segment('1') == '') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>index.php"><span class="lnr lnr-home pr-0 pb-lg-2"></span><span class=""> Dashboard</span></a></li>
					<li class="<?php echo ($this->uri->segment('1') == 'emp_list') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>emp_list"><span class="lnr lnr-apartment pr-0 pb-lg-2"></span><span class=""> Leaderboard </span></a></li>
					<li class=""><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class=""> Profile </span></a></li>
					<li class="<?php echo ($this->uri->segment('1') == 'Logout') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>logout"><span class="lnr lnr-exit-up pr-0 pb-lg-2"></span><span class=""> Logout </span></a></li>
				</ul>
				<?php } else { ?>
				<ul class="nav navbar-nav">
					<li class="<?php echo ($this->uri->segment('1') == '') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>index.php"><i class="fas fa-tachometer-alt"></i><span class=""> Dashboard</span></a></li>
					<li class="<?php echo ($this->uri->segment('1') == 'company_list') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>company_list"><i class="fa fa-list" aria-hidden="true"></i><span class=""> Employee List </span></a></li>
					<li class=""><a href="#"><i class="fa fa-certificate" aria-hidden="true"></i><span class=""> Badges </span></a></li>
					<li class=""><a href="#"><i class="fas fa-chart-line"></i><span class=""> Reports </span></a></li>
					<li class="<?php echo ($this->uri->segment('1') == 'company') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>company"><i class="fa fa-user" aria-hidden="true"></i><span class=""> Profile </span></a></li>
					<li class="<?php echo ($this->uri->segment('1') == 'Testimonial') ? 'active' : ''; ?>"><a href="#"><i class="fa fa-comments" aria-hidden="true"></i><span class="">Testimonial </span></a></li>
					<li class="<?php echo ($this->uri->segment('1') == 'Logout') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>logout"><i class="fa fa-sign-out" aria-hidden="true"></i><span class=""> Logout </span></a></li>
				</ul>
			<?php } ?>
			</div><!-- /.navbar-collapse -->
		</nav>  
	</div>