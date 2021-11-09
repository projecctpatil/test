<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url('assets/css/lnr-icon.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/slick-theme.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
<title>Brooch</title>


</head>
<body>

<div class="inner-wrapper">


	<header class="header">

		<div class="top-header-section">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-3 col-md-3 col-sm-3 col-6">
						<div class="logo my-3 my-sm-0">
							<a href="index.html">
								<img src="assets/img/brooch.svg" alt="logo image" class="img-fluid" width="100">
							</a>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-6 text-right">
						<div class="user-block d-none d-lg-block">
							<div class="row align-items-center">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="user-notification-block align-right d-inline-block">
										<div class="top-nav-search">
											<form>
												<input type="text" class="form-control" placeholder="Search here">
												<button class="btn" type="submit"><i class="fa fa-search"></i></button>
											</form>
										</div>
									</div>

									<div class="user-notification-block align-right d-inline-block">
										<ul class="list-inline m-0">
											<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Apply Leave">
												<a href="leave.html" class="font-23 menu-style text-white align-middle">
													<span class="lnr lnr-briefcase position-relative"></span>
												</a>
											</li>
										</ul>
									</div>


									<div class="user-info align-right dropdown d-inline-block header-dropdown">
										<a href="javascript:void(0)" data-toggle="dropdown" class=" menu-style dropdown-toggle">
											<div class="user-avatar d-inline-block">
												<img src="assets/img/profiles/img-6.jpg" alt="user avatar" class="rounded-circle img-fluid" width="55">
											</div>
										</a>

										<div class="dropdown-menu notification-dropdown-menu shadow-lg border-0 p-3 m-0 dropdown-menu-right">
											<a class="dropdown-item p-2" href="employment.html">
												<span class="media align-items-center">
													<span class="lnr lnr-user mr-3"></span>
													<span class="media-body text-truncate">
														<span class="text-truncate">Profile</span>
													</span>
												</span>
											</a>
											<a class="dropdown-item p-2" href="settings.html">
												<span class="media align-items-center">
													<span class="lnr lnr-cog mr-3"></span>
													<span class="media-body text-truncate">
														<span class="text-truncate">Settings</span>
													</span>
												</span>
											</a>
											<a class="dropdown-item p-2" href="<?php echo base_url('index.php/Home/logout'); ?>">
												<span class="media align-items-center">
													<span class="lnr lnr-power-switch mr-3"></span>
													<span class="media-body text-truncate">
														<span class="text-truncate">Login</span>
													</span>
												</span>
											</a>
										</div>

									</div>

								</div>
							</div>
						</div>
						<div class="d-block d-lg-none">
							<a href="javascript:void(0)">
							<span class="lnr lnr-user d-block display-5 text-white" id="open_navSidebar"></span>
							</a>

							<div class="offcanvas-menu" id="offcanvas_menu">
								<span class="lnr lnr-cross float-left display-6 position-absolute t-1 l-1 text-white" id="close_navSidebar"></span>
								<div class="user-info align-center bg-theme text-center">
									<a href="javascript:void(0)" class="d-block menu-style text-white">
										<div class="user-avatar d-inline-block mr-3">
											<img src="assets/img/profiles/img-6.jpg" alt="user avatar" class="rounded-circle img-fluid" width="55">
										</div>
									</a>
								</div>
								<div class="user-notification-block align-center">
									<div class="top-nav-search">
										<form>
											<input type="text" class="form-control" placeholder="Search here">
											<button class="btn" type="submit"><i class="fa fa-search"></i></button>
										</form>
									</div>
								</div>
								<hr>
								<div class="user-menu-items px-3 m-0">
									<a class="px-0 pb-2 pt-0" href="index.html">
										<span class="media align-items-center">
											<span class="lnr lnr-home mr-3"></span>
											<span class="media-body text-truncate text-left">
												<span class="text-truncate text-left">Dashboard</span>
											</span>
										</span>
									</a>
									<a class="p-2" href="employees.html">
										<span class="media align-items-center">
											<span class="lnr lnr-users mr-3"></span>
											<span class="media-body text-truncate text-left">
												<span class="text-truncate text-left">Employees</span>
											</span>
										</span>
									</a>
									<a class="p-2" href="company.html">
										<span class="media align-items-center">
											<span class="lnr lnr-apartment mr-3"></span>
											<span class="media-body text-truncate text-left">
												<span class="text-truncate text-left">Company</span>
											</span>
										</span>
									</a>
									<a class="p-2" href="calendar.html">
										<span class="media align-items-center">
											<span class="lnr lnr-calendar-full mr-3"></span>
											<span class="media-body text-truncate text-left">
												<span class="text-truncate text-left">Calendar</span>
											</span>
										</span>
									</a>
									<a class="p-2" href="leave.html">
										<span class="media align-items-center">
											<span class="lnr lnr-briefcase mr-3"></span>
											<span class="media-body text-truncate text-left">
												<span class="text-truncate text-left">Leave</span>
											</span>
										</span>
									</a>
									<a class="p-2" href="reviews.html">
										<span class="media align-items-center">
											<span class="lnr lnr-star mr-3"></span>
											<span class="media-body text-truncate text-left">
												<span class="text-truncate text-left">Reviews</span>
											</span>
										</span>
									</a>
									<a class="p-2" href="reports.html">
										<span class="media align-items-center">
											<span class="lnr lnr-rocket mr-3"></span>
											<span class="media-body text-truncate text-left">
												<span class="text-truncate text-left">Reports</span>
											 </span>
										</span>
									</a>
									<a class="p-2" href="manage.html">
										<span class="media align-items-center">
											<span class="lnr lnr-sync mr-3"></span>
											<span class="media-body text-truncate text-left">
												<span class="text-truncate text-left">Manage</span>
											</span>
										</span>
									</a>
									<a class="p-2" href="settings.html">
										<span class="media align-items-center">
											<span class="lnr lnr-cog mr-3"></span>
											<span class="media-body text-truncate text-left">
												<span class="text-truncate text-left">Settings</span>
											</span>
										</span>
									</a>
									<a class="p-2" href="employment.html">
										<span class="media align-items-center">
											<span class="lnr lnr-user mr-3"></span>
											<span class="media-body text-truncate text-left">
												<span class="text-truncate text-left">Profile</span>
											</span>
										</span>
									</a>
									<a class="p-2" href="login.html">
										<span class="media align-items-center">
											<span class="lnr lnr-power-switch mr-3"></span>
											<span class="media-body text-truncate text-left">
												<span class="text-truncate text-left">Logout</span>
											</span>
										</span>
									</a>
								</div>
							</div>

						</div>	
					</div>
				</div>
			</div>
		</div>

</header>


<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
				<aside class="sidebar sidebar-user">
					<div class="row">
						<div class="col-12">
							<div class="card ctm-border-radius shadow-sm grow">
								<div class="card-body py-4">
									<div class="row">
										<div class="col-md-12 mr-auto text-left">
											<div class="custom-search input-group">
												<div class="custom-breadcrumb">
													<ol class="breadcrumb no-bg-color d-inline-block p-0 m-0 mb-2">
														<li class="breadcrumb-item d-inline-block">
															<a href="index.html" class="text-dark">Home</a>
														</li>
														<li class="breadcrumb-item d-inline-block active">Dashboard</li>
													</ol>
													<h4 class="text-dark">Admin Dashboard</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="user-card card shadow-sm bg-white text-center ctm-border-radius grow">
						<div class="user-info card-body">
							<div class="user-avatar mb-4">
								<img src="assets/img/profiles/img-13.jpg" alt="User Avatar" class="img-fluid rounded-circle" width="100">
							</div>
							<div class="user-details">
								<h4><b>Welcome Admin</b></h4>
								<p>Sun, 29 Nov 2019</p>
							</div>
						</div>
					</div>

					<div class="sidebar-wrapper d-lg-block d-md-none d-none">
						<div class="card ctm-border-radius shadow-sm border-none grow">
							<div class="card-body">
								<div class="row no-gutters">
									<div class="col-6 align-items-center text-center">
										<a href="index.html" class="text-white active p-4 first-slider-btn ctm-border-right ctm-border-left ctm-border-top"><span class="lnr lnr-home pr-0 pb-lg-2 font-23"></span><span class="">Dashboard</span></a>
									</div>
									<div class="col-6 align-items-center shadow-none text-center">
										<a href="employees.html" class="text-dark p-4 second-slider-btn ctm-border-right ctm-border-top"><span class="lnr lnr-users pr-0 pb-lg-2 font-23"></span><span class="">Employees</span></a>
									</div>
									<div class="col-6 align-items-center shadow-none text-center">
										<a href="company.html" class="text-dark p-4 ctm-border-right ctm-border-left"><span class="lnr lnr-apartment pr-0 pb-lg-2 font-23"></span><span class="">Company</span></a>
									</div>
									<div class="col-6 align-items-center shadow-none text-center">
										<a href="calendar.html" class="text-dark p-4 ctm-border-right"><span class="lnr lnr-calendar-full pr-0 pb-lg-2 font-23"></span><span class="">Calendar</span></a>
									</div>
									<div class="col-6 align-items-center shadow-none text-center">
										<a href="leave.html" class="text-dark p-4 ctm-border-right ctm-border-left"><span class="lnr lnr-briefcase pr-0 pb-lg-2 font-23"></span><span class="">Leave</span></a>
									</div>
									<div class="col-6 align-items-center shadow-none text-center">
										<a href="reviews.html" class="text-dark p-4 last-slider-btn ctm-border-right"><span class="lnr lnr-star pr-0 pb-lg-2 font-23"></span><span class="">Reviews</span></a>
									</div>
									<div class="col-6 align-items-center shadow-none text-center">
										<a href="reports.html" class="text-dark p-4 ctm-border-right ctm-border-left"><span class="lnr lnr-rocket pr-0 pb-lg-2 font-23"></span><span class="">Reports</span></a>
									</div>
									<div class="col-6 align-items-center shadow-none text-center">
										<a href="manage.html" class="text-dark p-4 ctm-border-right"><span class="lnr lnr-sync pr-0 pb-lg-2 font-23"></span><span class="">Manage</span></a>
									</div>
									<div class="col-6 align-items-center shadow-none text-center">
										<a href="settings.html" class="text-dark p-4 last-slider-btn1 ctm-border-right ctm-border-left"><span class="lnr lnr-cog pr-0 pb-lg-2 font-23"></span><span class="">Settings</span></a>
									</div>
									<div class="col-6 align-items-center shadow-none text-center">
										<a href="employment.html" class="text-dark p-4 last-slider-btn ctm-border-right"><span class="lnr lnr-user pr-0 pb-lg-2 font-23"></span><span class="">Profile</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</aside>
			</div>
			<div class="col-xl-9 col-lg-8  col-md-12">
				<div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card grow">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center breaking-news bg-white">
							<div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news">
								<span class="d-flex align-items-center">&nbsp;SAMSUNG</span>
							</div>
							<marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> 
								<a href="#">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </a>
								<span class="dot"></span> 
								<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </a> 
								<span class="dot"></span> 
								<a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse </a> 
							</marquee>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="card dash-widget ctm-border-radius shadow-sm grow">
							<div class="card-body">
								<div class="card-icon bg-primary">
									<i class="fa fa-users" aria-hidden="true"></i>
								</div>
								<div class="card-right">
									<h4 class="card-title">Employees</h4>
									<p class="card-text">700</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-12">
						<div class="card dash-widget ctm-border-radius shadow-sm grow">
							<div class="card-body">
								<div class="card-icon bg-warning">
									<i class="fas fa-award"></i>
								</div>
								<div class="card-right">
									<h4 class="card-title">Issues Badges</h4>
									<p class="card-text">30</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-12">
						<div class="card dash-widget ctm-border-radius shadow-sm grow">
							<div class="card-body">
								<div class="card-icon bg-danger">
									<i class="fas fa-briefcase"></i>
								</div>
								<div class="card-right">
									<h4 class="card-title">Active Employees</h4>
									<p class="card-text">100</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-12">
						<div class="card dash-widget ctm-border-radius shadow-sm grow">
							<div class="card-body">
								<div class="card-icon bg-success">
								<i class="fas fa-smile"></i>
								</div>
								<div class="card-right">
									<h4 class="card-title">Happy Index</h4>
									<p class="card-text">9.8</p>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6 d-flex">
						<div class="card ctm-border-radius shadow-sm flex-fill grow">
							<div class="card-header">
								<h4 class="card-title mb-0">Live Challenges</h4>
							</div>
							<div class="card-body">
								<div class="Content">
									<ul class="List">
										<li class="List-item">
											<div class="list-item-title">
												<h6>WalkOn</h6>
												<button class="btn" data-toggle="modal" data-target="#exampleModalCenter">
													<i class="fas fa-plus"></i>
												</button>	
											</div>
											<div class="ProgressBar ProgressBar--animateCircle ProgressBar--animateText" data-progress="50">
												<svg class="ProgressBar-contentCircle"  viewBox="0 0 200 200">
											<!-- on défini le l'angle et le centre de rotation du cercle -->
											<circle transform="rotate(-90, 100, 100)" class="ProgressBar-background" cx="100" cy="100" r="95" />
											<circle transform="rotate(-90, 100, 100)" class="ProgressBar-circle" cx="100" cy="100" r="95" />
											<span class="ProgressBar-percentage ProgressBar-percentage--count"></span>
												</svg>
											</div>
											<div class="more-graph-item text-center justify-content-center">
												<button class="btn">More</button>
											</div>
										</li>
								  
										<li class="List-item">
											<div class="list-item-title">
												<h6>SprintOn</h6>
												<button class="btn"><i class="fas fa-plus"></i></button>
											</div>
											<div class="ProgressBar ProgressBar--animateCircle ProgressBar--animateText" data-progress="59">
												<svg class="ProgressBar-contentCircle"  viewBox="0 0 200 200">
														<!-- on défini le l'angle et le centre de rotation du cercle -->
												<circle transform="rotate(-90, 100, 100)" class="ProgressBar-background" cx="100" cy="100" r="95" />
												<circle transform="rotate(-90, 100, 100)" class="ProgressBar-circle" cx="100" cy="100" r="95" />
												<span class="ProgressBar-percentage ProgressBar-percentage--count"></span>
												</svg>
											</div>
											<div class="more-graph-item text-center justify-content-center">
												<button class="btn">More</button>
											</div>
										</li>
									  
										<li class="List-item">
											<div class="list-item-title">
												<h6>PedalOn</h6>
												<button class="btn"><i class="fas fa-plus"></i></button>
											</div>
											<div class="ProgressBar ProgressBar--animateCircle ProgressBar--animateText" data-progress="95">
												<svg class="ProgressBar-contentCircle"  viewBox="0 0 200 200">
														<!-- on défini le l'angle et le centre de rotation du cercle -->
												<circle transform="rotate(-90, 100, 100)" class="ProgressBar-background" cx="100" cy="100" r="95" />
												<circle transform="rotate(-90, 100, 100)" class="ProgressBar-circle" cx="100" cy="100" r="95" />
												<span class="ProgressBar-percentage ProgressBar-percentage--count"></span>
												</svg>
											</div>
											<div class="more-graph-item text-center justify-content-center">
												<button class="btn">More</button>
											</div>
										</li>
									
									</ul>
								</div>
								<!--<canvas id="pieChart"></canvas>-->
							</div>
						</div>
					</div>
					<div class="col-md-6 d-flex">
						<div class="card ctm-border-radius shadow-sm flex-fill grow">
							<div class="card-header">
								<h4 class="card-title mb-0">Reports</h4>
							</div>
							<div class="card-body">
								<div id="carouselreports" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#carouselreports" data-slide-to="0" class="active"></li>
										<li data-target="#carouselreports" data-slide-to="1"></li>
										<li data-target="#carouselreports" data-slide-to="2"></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active text-center">
											<h5>HealthOMeter</h5>
											<canvas id="Chart1"></canvas>
										</div>
										<div class="carousel-item text-center">
											<h5>Participation</h5>
										    <canvas id="Chart2"></canvas>
										</div>
										<div class="carousel-item text-center">
											<h5>HealthOMeter</h5>
											<canvas id="Chart3"></canvas>
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselreports" role="button" data-slide="prev">
										<i class="fas fa-angle-left"></i>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselreports" role="button" data-slide="next">
										<i class="fas fa-angle-right"></i>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="card ctm-border-radius shadow-sm grow">
							<div class="card-header">
								<h4 class="card-title mb-0 d-inline-block">Popular Challenges Around</h4>
								<a href="javascript:void(0)" class="d-inline-block float-right text-primary"><i class="lnr lnr-sync"></i></a>
							</div>
							<div class="card-body recent-activ">
								<ul class="nav nav-tabs tabs-marker tabs-dark bg-dark" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="walk" data-toggle="tab" href="#walk-tab2" role="tab" aria-controls="walk" aria-selected="true">Walkamaniac<span class="marker"></span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="run" data-toggle="tab" href="#run-tab2" role="tab" aria-controls="run" aria-selected="false">Runamaniac<span class="marker"></span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pedal" data-toggle="tab" href="#pedal-tab2" role="tab" aria-controls="pedal" aria-selected="false">Pedalmaniac<span class="marker"></span></a>
									</li>
								</ul>
								<div class="tab-content challenge-tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="walk-tab2" role="tabpanel" aria-labelledby="walk-tab">
										<table class="table text-center">
											<tbody>
												<tr>
												  <th>20K</th>
												  <td>30 Days</td>
												  <td>Athletic</td>
												  <td><i class="fas fa-award"></i></td>
												  <td><button>Start</button></td>
												</tr>
												<tr>
												  <th>6K</th>
												  <td>30 Days</td>
												  <td>Amateur</td>
												  <td><i class="fas fa-award"></i></td>
												  <td><button>Start</button></td>
												</tr>
												<tr>
												  <th>25K+</th>
												  <td>30 Days</td>
												  <td>Pro</td>
												  <td><i class="fas fa-award"></i></td>
												  <td><button>Start</button></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="tab-pane fade" id="run-tab2" role="tabpanel" aria-labelledby="run-tab">
										<table class="table text-center">
											<tbody>
												<tr>
												  <th>20K</th>
												  <td>30 Days</td>
												  <td>Athletic</td>
												  <td><i class="fas fa-award"></i></td>
												  <td><button>Start</button></td>
												</tr>
												<tr>
												  <th>6K</th>
												  <td>30 Days</td>
												  <td>Amateur</td>
												  <td><i class="fas fa-award"></i></td>
												  <td><button>Start</button></td>
												</tr>
												<tr>
												  <th>25K+</th>
												  <td>30 Days</td>
												  <td>Pro</td>
												  <td><i class="fas fa-award"></i></td>
												  <td><button>Start</button></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="tab-pane fade" id="pedal-tab2" role="tabpanel" aria-labelledby="pedal-tab">
										<table class="table text-center">
											<tbody>
												<tr>
												  <th>20K</th>
												  <td>30 Days</td>
												  <td>Athletic</td>
												  <td><i class="fas fa-award"></i></td>
												  <td><button>Start</button></td>
												</tr>
												<tr>
												  <th>6K</th>
												  <td>30 Days</td>
												  <td>Amateur</td>
												  <td><i class="fas fa-award"></i></td>
												  <td><button>Start</button></td>
												</tr>
												<tr>
												  <th>25K+</th>
												  <td>30 Days</td>
												  <td>Pro</td>
												  <td><i class="fas fa-award"></i></td>
												  <td><button>Start</button></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 d-flex">

						<div class="card recent-acti flex-fill shadow-sm grow">
							<div class="card-header">
								<h4 class="card-title mb-0 d-inline-block">Recent Activities</h4>
								<a href="javascript:void(0)" class="d-inline-block float-right text-primary"><i class="lnr lnr-sync"></i></a>
							</div>
							<div class="card-body recent-activ admin-activ">
								<div class="recent-comment">
									<div class="notice-board">
										<div class="table-img">
											<div class="e-avatar mr-3"><img class="img-fluid" src="assets/img/profiles/img-5.jpg" alt="Danny Ward"></div>
										</div>
										<div class="notice-body">
											<p class="mb-0">Lorem ipsum dolor sit amet, id id quo eruditi eloquentiam.</p>
											<span class="ctm-text-sm">Danny Ward | 1 hour ago</span>
										</div>
									</div>
									<hr>
									<div class="notice-board">
										<div class="table-img">
											<div class="e-avatar mr-3"><img class="img-fluid" src="assets/img/profiles/img-2.jpg" alt="John Gibbs"></div>
										</div>
										<div class="notice-body">
											<p class="mb-0">Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</p>
											<span class="ctm-text-sm">John Gibbs | 2 hour ago</span>
										</div>
									</div>
									<hr>
									<div class="notice-board">
										<div class="table-img">
											<div class="e-avatar mr-3"><img class="img-fluid" src="assets/img/profiles/img-6.jpg" alt="Maria Cotton"></div>
										</div>
										<div class="notice-body">
											<p class="mb-0">Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</p>
											<span class="ctm-text-sm">Maria Cotton | 4 hour ago</span>
										</div>
									</div>
									<hr>
									<div class="notice-board">
										<div class="table-img">
											<div class="e-avatar mr-3"><img class="img-fluid" src="assets/img/profiles/img-4.jpg" alt="Linda Craver"></div>
										</div>
										<div class="notice-body">
											<p class="mb-0">Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</p>
											<span class="ctm-text-sm">Linda Craver | 5 hour ago</span>
										</div>
									</div>
									<hr>
									<div class="notice-board">
										<div class="table-img">
											<div class="e-avatar mr-3"><img class="img-fluid" src="assets/img/profiles/img-3.jpg" alt="Jenni Sims"></div>
										</div>
										<div class="notice-body">
											<p class="mb-0">Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</p>
											<span class="ctm-text-sm">Jenni Sims | 6 hour ago</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-12 col-md-12 d-flex">

						<div class="card flex-fill team-lead shadow-sm grow">
							<div class="card-header">
								<h4 class="card-title mb-0 d-inline-block">Leaderboard</h4>
							</div>
							<div class="card-body">
								<table class="table leader-table text-center">
								  <thead class="thead-dark">
									<tr>
										<th>Member</th>
										<th>Rank</th>
										<th>Department</th>
										<th>Head4</th>
										<th>Badges</th>
									</tr>
								  </thead>
								  <tbody>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="avatar avatar-blue mr-3">
														<img src="assets/img/avatar_placeholder_2_purple.png">
													</div>
													<p class="font-weight-bold mb-0">Ethan Black</p>
												</div>
											</td>
											<td>768</td>
											<td>Design</td>
											<td>111</td>
											<td>
												<ul>
													<li><div class="avatar avatar-blue"><img src="assets/img/evalbot_30.png"></div></li>
													<li><div class="avatar avatar-blue"><img src="assets/img/evalbot_30.png"></div></li>
												</ul>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="avatar avatar-blue mr-3">
														<img src="assets/img/v101-best-26-people_1.jpg">
													</div>
													<p class="font-weight-bold mb-0">Ethan Black</p>
												</div>
											</td>
											<td>768</td>
											<td>Design</td>
											<td>111</td>
											<td>
												<ul>
													<li><div class="avatar avatar-blue"><img src="assets/img/evalbot_30.png"></div></li>
													<li><div class="avatar avatar-blue"><img src="assets/img/evalbot_30.png"></div></li>
													<li><div class="avatar avatar-blue"><img src="assets/img/evalbot_30.png"></div></li>
													<li><div class="avatar avatar-blue"><img src="assets/img/evalbot_30.png"></div></li>
												</ul>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="avatar avatar-blue mr-3">
														<img src="assets/img/avatar_placeholder_2_purple.png">
													</div>
													<p class="font-weight-bold mb-0">Ethan Black</p>
												</div>
											</td>
											<td>768</td>
											<td>Design</td>
											<td>111</td>
											<td>
												<ul>
													<li><div class="avatar avatar-blue"><img src="assets/img/evalbot_30.png"></div></li>
													<li><div class="avatar avatar-blue"><img src="assets/img/evalbot_30.png"></div></li>
													<li><div class="avatar avatar-blue"><img src="assets/img/evalbot_30.png"></div></li>
												</ul>
											</td>
										</tr>
								  </tbody>
								</table>
							</div>
						</div>
					</div>
					
					<div class="col-lg-6 col-md-12 d-flex">

						<div class="card recent-acti flex-fill shadow-sm grow">
							<div class="card-header">
								<h4 class="card-title mb-0 d-inline-block">Employment Engagement Budgeting</h4>
								<a href="javascript:void(0)" class="d-inline-block float-right text-primary"><i class="lnr lnr-sync"></i></a>
							</div>
							<div class="card-body recent-activ admin-activ">
								<div class="row stat">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="stats milestone-details">
											<div class="counting highlight" data-count="2000000">0</div>
											<h5>Budget</h5>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 milestone-right">
										<div class="stats milestone-details">
											<div class="counting highlight" data-count="1000000">0</div>
											<h5>Remaining</h5>
										</div>
									</div>
								</div>
								<div class="row stat justify-content-center">
									<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
										<div class="stats milestone-details">
											<div class="counting highlight" data-count="1000000">0</div>
											<h5>Utilized</h5>
										</div>
									</div>
								</div>
								<div class="row stat">
									<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
										<div class="stats milestone-details">
											<div class="counting highlight" data-count="50000">0</div>
											<h5>Redeemed</h5>
										</div>
									</div>
									<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12 milestone-right">
										<div class="stats milestone-details">
											<div class="counting highlight" data-count="10000">0</div>
											<h5>Earned</h5>
										</div>
									</div>
								</div>
							</div><!-- stat -->
						</div>
					</div>

					<div class="col-lg-6 col-md-12 d-flex">

						<div class="card flex-fill today-list shadow-sm grow">
							<div class="card-header">
								<h4 class="card-title mb-0 d-inline-block">Brands</h4>
								<!--<a href="leave.html" class="d-inline-block float-right text-primary"><i class="fa fa-suitcase"></i></a>-->
							</div>
							<div class="card-body recent-activ brand-activ">
								<div class="recent-comment">
									<div class="grid">
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/arch-daily.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/architectural-digest.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/architizer.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/car-and-driver.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/contemporist.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/dwell.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/houzz.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/hypebeast.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/interior-design.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/los-angeles-times.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/metropolitan-home.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/robb-report.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/sports-illustrated.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/sunset-magazine.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/trendir.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/unique-homes.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/wall-street-journal.png" alt=""></div>
									  <div><img src="https://csstricks-images.s3.us-east-1.amazonaws.com/logos/western-art-and-architecture.png" alt=""></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form>
		  <div class="form-group row">
			<label for="title" class="col-sm-2 col-form-label">Title</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="title" placeholder="Title">
			</div>
		  </div>
		  <div class="form-group row">
			<label class="col-sm-2 col-form-label">Title</label>
			<div class="col-sm-10">
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			  <label class="form-check-label" for="inlineRadio1">Standard</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
			  <label class="form-check-label" for="inlineRadio2">Power</label>
			</div>
			</div>
		  </div>
		  <div class="form-group row">
			<div class="col">
				<div class="row">
			  <label for="startdate" class="col-sm-4 col-form-label">Start Date</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="startdate" placeholder="Title">
				</div>
				</div>
			</div>
			<div class="col">
				<div class="row">
				<label for="stopdate" class="col-sm-4 col-form-label">Stop Date</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="stopdate" placeholder="Title">
				</div>
				</div>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="minstep" class="col-sm-2 col-form-label">Minimum Steps</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="minstep" placeholder="Title">
			</div>
		  </div>
		  <div class="form-group row">
			<label for="msg" class="col-sm-2 col-form-label">Message</label>
			<div class="col-sm-10">
			  <textarea class="form-control" id="msg" rows="3"></textarea>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="reward" class="col-sm-2 col-form-label">Reward</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="reward" placeholder="Title">
			</div>
		  </div>
		  <button type="submit" class="btn btn-primary">Sign in</button>
		</form>
      </div>
    </div>
  </div>
</div>





</div>

<div class="sidebar-overlay" id="sidebar_overlay"></div>

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