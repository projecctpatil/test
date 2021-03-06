<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include ('header.php'); ?>


<div class="mcw">
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 col-lg-12  col-md-12">
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

				<?php if (isset($data)) { ?>

				<?php } else { ?>	
				<div class="row">
					<div class="col-lg-12">
						<div class="card ctm-border-radius shadow-sm flex-fill grow">
							<div class="card-header">
								<h4 class="card-title mb-0">Live Challenges</h4>
							</div>
							<?php if ($this->session->flashdata('create_challenge')) { ?>
								<p class="alert alert-success text-center" ><?php echo $this->session->flashdata('create_challenge'); ?></p>
							<?php } ?>
							
							<div class="card-body">
								<div class="Content">
									<ul class="List">
										<li class="List-item shadow-sm">
											<div class="list-item-title">
												<span><strong>WalkOn</strong></span>
												<button class="btn" data-toggle="modal" data-target="#exampleModalCenterwalkon">
													<i class="fas fa-plus"></i>
												</button>	
											</div>
											<div class="circle_percent" data-percent="<?php echo $walkon; ?>">
												  <div class="circle_inner">
													  <div class="round_per">
													</div>
												</div>
											</div>
											<p>Diwali Challenge</p>
											<p>20 active challenges</p>
											<div class="more-graph-item text-center justify-content-center">
												<a href="challengelist.php" class="btn">More</a>
											</div>
										</li>
								  
										<li class="List-item shadow-sm">
											<div class="list-item-title">
												<span><strong>SprintOn</strong></span>
												<button class="btn" data-toggle="modal" data-target="#exampleModalCentersprinton"><i class="fas fa-plus"></i></button>
											</div>
											<div class="circle_percent" data-percent="<?php echo $stepon; ?>">
												<div class="circle_inner">
													<div class="round_per"></div>
												</div>
											</div>
											<p>Diwali Challenge</p>
											<p>20 active challenges</p>
											<div class="more-graph-item text-center justify-content-center">
												<a href="challengelist.php" class="btn">More</a>
											</div>
										</li>
									  
										<li class="List-item shadow-sm">
											<div class="list-item-title">
												<span><strong>PedalOn</strong></span>
												<button class="btn" data-toggle="modal" data-target="#exampleModalCenterpedalon"><i class="fas fa-plus"></i></button>
											</div>
											<div class="circle_percent" data-percent="<?php echo $pedalon; ?>">
												<div class="circle_inner">
													<div class="round_per"></div>
												</div>
											</div>
											<p>Diwali Challenge</p>
											<p>20 active challenges</p>
											<div class="more-graph-item text-center justify-content-center">
												<a href="challengelist.php" class="btn">More</a>
											</div>
										</li>
									
									</ul>
								</div>
								<!--<canvas id="pieChart"></canvas>-->
							</div>
						</div>
					</div>
					
					
				</div>

				<div class="row">
				
					<div class="col-lg-6">
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
										<li data-target="#carouselreports" data-slide-to="3"></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active text-center">
											<h5>Employee Participation</h5>
											<canvas id="Chart1"></canvas>
										</div>
										<div class="carousel-item text-center">
											<h5>Monthly redeem</h5>
										    <canvas id="Chart2"></canvas>
										</div>
										<div class="carousel-item text-center">
											<h5>EHI</h5>
											<canvas id="Chart3"></canvas>
										</div>
										<div class="carousel-item text-center">
											<h5>Health Meter</h5>
											<canvas id="Chart4"></canvas>
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
					
					<div class="col-lg-6">
						<div class="card ctm-border-radius shadow-sm grow">
							<div class="card-header">
								<h4 class="card-title mb-0 d-inline-block">Generic Award</h4>
								<a href="javascript:void(0)" class="d-inline-block float-right text-primary"><i class="lnr lnr-sync"></i></a>
							</div>
							<div class="card-body recent-activ">
								<ul class="nav nav-tabs tabs-marker tabs-dark bg-dark" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="recent" data-toggle="tab" href="#recent-tab" role="tab" aria-controls="recent" aria-selected="true">Recent <span class="marker"></span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="older" data-toggle="tab" href="#older-tab" role="tab" aria-controls="older" aria-selected="false">Older<span class="marker"></span></a>
									</li>
								</ul>
								<div class="tab-content challenge-tab-content" id="myTabContent">
									<div class="tab-pane fade show award-tab-content active" id="recent-tab" role="tabpanel" aria-labelledby="recent-tab">
										<table class="table text-center">
											<tbody>
												<tr>
												  <td>
													<div class="avatar avatar-blue mr-3">
														<img src="assets/img/avatar_placeholder_2_purple.png">
													</div>
												  </td>
												  <td>Monthly Award</td>
												  <td>Employee A</td>
												  <td>1000 Pts</td>
												</tr>
												<tr>
												  <td>
													<div class="avatar avatar-blue mr-3">
														<img src="assets/img/avatar_placeholder_2_purple.png">
													</div>
												  </td>
												  <td>Monthly Award</td>
												  <td><button class="btn" data-toggle="modal" data-target="#assignaward">Assign</button></td>
												  <td>2500 Pts</td>
												</tr>
												<tr>
												  <td>
													<div class="avatar avatar-blue mr-3">
														<img src="assets/img/avatar_placeholder_2_purple.png">
													</div>
												  </td>
												  <td>Monthly Award</td>
												  <td>Employee C</td>
												  <td>10000 Pts</td>
												</tr>
												<tr>
												  <td>
													<div class="avatar avatar-blue mr-3">
														<img src="assets/img/avatar_placeholder_2_purple.png">
													</div>
												  </td>
												  <td>Monthly Award</td>
												  <td>Employee D</td>
												  <td>10000 Pts</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="tab-pane fade" id="older-tab" role="tabpanel" aria-labelledby="older-tab">
										<div class="empty-reward">
											<p>Empty <i class="fas fa-frown"></i></p>
											<p>Reward your Employee!</p>
											<button class="btn" data-toggle="modal" data-target="#assignaward">Reward</button>
										</div>
										<!--<table class="table text-center">
											<tbody>
												<tr>
												  <td>
													<div class="avatar avatar-blue mr-3">
														<img src="assets/img/avatar_placeholder_2_purple.png">
													</div>
												  </td>
												  <td>Monthly Award</td>
												  <td>Employee D</td>
												  <td>10000 Pts</td>
												</tr>
												<tr>
												  <td>
													<div class="avatar avatar-blue mr-3">
														<img src="assets/img/avatar_placeholder_2_purple.png">
													</div>
												  </td>
												  <td>Monthly Award</td>
												  <td>Employee E</td>
												  <td>10000 Pts</td>
												</tr>
												<tr>
												  <td>
													<div class="avatar avatar-blue mr-3">
														<img src="assets/img/avatar_placeholder_2_purple.png">
													</div>
												  </td>
												  <td>Monthly Award</td>
												  <td>Employee F</td>
												  <td>10000 Pts</td>
												</tr>
											</tbody>
										</table>-->
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
					
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
									<div class="stat-section col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="row milestone-details">
											<div class="col-7 stats">
												<h5>Budget</h5>
												<div class="counting highlight">100K</div>
												<button class="btn" data-toggle="modal" data-target="#">
													<i class="fas fa-plus"></i>
												</button>
											</div>
											<div class="col-5">
												<div class="stats-icon">
													<i class="fas fa-wallet"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="stat-section col-lg-6 col-md-6 col-sm-6 col-xs-12 milestone-right">
										<div class="row milestone-details gifted-section">
											<div class="col-7 stats">
												<h5>Gifted</h5>
												<div class="counting highlight">50K</div>
											</div>
											<div class="col-5">
												<div class="stats-icon">
													<i class="fas fa-gift"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row stat">
									<div class="stat-section col-lg-6 col-md-3 col-sm-6 col-xs-12">
										<div class="row milestone-details">
											<div class="col-7 stats">
												<h5>Redeemed</h5>
												<div class="counting highlight">40K</div>
											</div>
											<div class="col-5">
												<div class="stats-icon">
													<i class="fas fa-ticket-alt"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="stat-section col-lg-6 col-md-3 col-sm-6 col-xs-12 milestone-right">
										<div class="row milestone-details">
											<div class="col-7 stats">
												<h5>Brooch coins</h5>
												<div class="counting highlight">10K</div>
											</div>
											<div class="col-5">
												<div class="stats-icon">
													<i class="fas fa-coins"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row stat">
									<div class="stat-section justify-content-center col-lg-12 col-md-3 col-sm-6 col-xs-12">
										<div class="row milestone-details">
											<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
												<div class="row">
													<div class="col-7 stats">
														<h5>Total spend</h5>
														<div class="counting highlight">500K</div>
													</div>
													<div class="col-5">
														<div class="stats-icon">
															<i class="fas fa-money-bill"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
												<div class="row">
													<div class="col-7 stats">
														<h5>Total savings</h5>
														<div class="counting highlight">10K</div>
													</div>
													<div class="col-5">
														<div class="stats-icon">
															<i class="fas fa-money-bill"></i>
														</div>
													</div>
												</div>
											</div>
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
			<?php } ?>
		</div>
	</div>
</div>




</div>


<!-- Modal -->
<div class="modal fade create-challenge" id="exampleModalCenterwalkon" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<!-- multistep form -->
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg12 col-xl-12 text-center p-0 mb-2">
            <div class="card-main-body px-5 pt-4 pb-0 mb-3">
                <h2 id="heading">Create Challenge</h2>
                <form id="msform" action="<?php echo base_url(); ?>create_challenge" method="POST">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="event"><strong>Define Event</strong></li>
                        <li id="createbadge"><strong>Create your Badge</strong></li>
                    </ul>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="steps">Step 1 - 2</h2>
                                </div>
                            </div> 
                            <input class="popupinput" type="hidden" name="popular" value="walkon">
							<label class="fieldlabels">Name: *</label> 
							<input class="popupinput" type="text" name="name" placeholder="Name" /> 
							<label class="fieldlabels">Start Date: *</label> 
							<input class="popupinput" type="date" name="start_time" placeholder="Start Date" /> 
							<label class="fieldlabels">End Date: *</label> 
							<input class="popupinput" type="date" name="end_time" placeholder="End Date" /> 
							<label class="fieldlabels">Number of Steps: *</label> 
							<input class="popupinput" type="number" name="step_count" placeholder="No. of Steps" /> 
							<label class="fieldlabels">Message: </label> 
							<textarea id="msg" rows="3" name="description"></textarea>
							<label class="fieldlabels">Points: *</label> 
							<input class="popupinput" type="number" name="points" placeholder="Points" />
							<label class="fieldlabels">Duration: *</label> 
							<input class="popupinput" type="number" name="duration" placeholder="Duration" />
                        </div> 
						<input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="steps">Step 2 - 2</h2>
                                </div>
                            </div> 
							<input type="radio" id="name" name="b_name" value="30">
							<label class="fieldlabels fieldlabelradio" for="standard">Standard</label>
							<input type="radio" id="name" name="b_name" value="60">
							<label class="fieldlabels fieldlabelradio" for="power">Power</label>
							<br>
                        </div> 
						<input type="submit" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
		
      </div>
    </div>
  </div>
</div>


<div class="modal fade create-challenge" id="exampleModalCentersprinton" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<!-- multistep form -->
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg12 col-xl-12 text-center p-0 mb-2">
            <div class="card-main-body px-5 pt-4 pb-0 mb-3">
                <h2 id="heading">Create Challenge</h2>
                <form id="msform" action="<?php echo base_url(); ?>create_challenge" method="POST">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="event"><strong>Define Event</strong></li>
                        <li id="createbadge"><strong>Create your Badge</strong></li>
                    </ul>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="steps">Step 1 - 2</h2>
                                </div>
                            </div>
                            <input class="popupinput" type="hidden" name="popular" value="stepon">
                            <label class="fieldlabels">Name: *</label> 
							<input class="popupinput" type="text" name="name" placeholder="Name" /> 
							<label class="fieldlabels">Start Date: *</label> 
							<input class="popupinput" type="date" name="start_time" placeholder="Start Date" /> 
							<label class="fieldlabels">End Date: *</label> 
							<input class="popupinput" type="date" name="end_time" placeholder="End Date" /> 
							<label class="fieldlabels">distance: *</label> 
							<input class="popupinput" type="number" name="distance" placeholder="distance" /> 
							<label class="fieldlabels">speed: *</label> 
							<input class="popupinput" type="number" name="speed" placeholder="speed" /> 
							<label class="fieldlabels">Message: </label> 
							<textarea id="msg" rows="3" name="description"></textarea>
							<label class="fieldlabels">Points: *</label> 
							<input class="popupinput" type="number" name="points" placeholder="Points" />
							<label class="fieldlabels">Duration: *</label> 
							<input class="popupinput" type="number" name="duration" placeholder="Duration" />
                        </div> 
						<input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="steps">Step 2 - 2</h2>
                                </div>
                            </div> 
							<input type="radio" id="name" name="b_name" value="30">
							<label class="fieldlabels fieldlabelradio" for="standard">Standard</label>
							<input type="radio" id="name" name="b_name" value="60">
							<label class="fieldlabels fieldlabelradio" for="power">Power</label>
							<br>
                        </div> 
						<input type="submit" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
		
      </div>
    </div>
  </div>
</div>

<div class="modal fade create-challenge" id="exampleModalCenterpedalon" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<!-- multistep form -->
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg12 col-xl-12 text-center p-0 mb-2">
            <div class="card-main-body px-5 pt-4 pb-0 mb-3">
                <h2 id="heading">Create Challenge</h2>
                <form id="msform" action="<?php echo base_url(); ?>create_challenge" method="POST">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="event"><strong>Define Event</strong></li>
                        <li id="createbadge"><strong>Create your Badge</strong></li>
                    </ul>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="steps">Step 1 - 2</h2>
                                </div>
                            </div>
                            <input class="popupinput" type="hidden" name="popular" value="pedalon">
                            <label class="fieldlabels">Name: *</label> 
							<input class="popupinput" type="text" name="name" placeholder="Name" /> 
							<label class="fieldlabels">Start Date: *</label> 
							<input class="popupinput" type="date" name="start_time" placeholder="Start Date" /> 
							<label class="fieldlabels">End Date: *</label> 
							<input class="popupinput" type="date" name="end_time" placeholder="End Date" /> 
							<label class="fieldlabels">Duration: *</label> 
							<input class="popupinput" type="number" name="duration" placeholder="Duration" />
							<label class="fieldlabels">Speed: *</label> 
							<input class="popupinput" type="number" name="speed" placeholder="Speed" /> 
							<label class="fieldlabels">Message: </label> 
							<textarea id="msg" rows="3" name="description"></textarea>
							<label class="fieldlabels">Points: *</label> 
							<input class="popupinput" type="number" name="points" placeholder="Points" />
							<label class="fieldlabels">Duration: *</label> 
							<input class="popupinput" type="number" name="duration" placeholder="Duration" />
                        </div> 
						<input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="steps">Step 2 - 2</h2>
                                </div>
                            </div> 
							<input type="radio" id="name" name="b_name" value="30">
							<label class="fieldlabels fieldlabelradio" for="standard">Standard</label>
							<input type="radio" id="name" name="b_name" value="60">
							<label class="fieldlabels fieldlabelradio" for="power">Power</label>
							<br>
                        </div> 
						<input type="submit" name="next" class="next action-button" value="Submit" /> 
						<input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                   
                </form>
            </div>
        </div>
    </div>
		
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="assignaward" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<!-- multistep form -->
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg12 col-xl-12 text-center p-0 mb-2">
            <div class="card-main-body px-5 pt-4 pb-0 mb-3">
                <h2 id="heading">Generic Award</h2>
                <form id="msform" action="<?php echo base_url(); ?>create_challenge" method="POST">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="detail"><strong>Details</strong></li>
                        <li id="badge"><strong>Badge</strong></li>
                        <!-- <li id="payment"><strong>Summary</strong></li> -->
						<li id="summary"><strong>Summary</strong></li>
                    </ul>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="steps">Step 1 - 3</h2>
                                </div>
                            </div>
                            <input class="popupinput" type="hidden" name="popular" value="pedalon">
                            <label class="fieldlabels">Award Name: *</label> 
							<input class="popupinput" type="text" name="name" placeholder="Award Name" /> 
							<label class="fieldlabels">Description: *</label> 
							<textarea id="msg" rows="3" name="description"></textarea>
							<label class="fieldlabels">Assign: *</label> 
							  <select name="cars" id="cars">
								<option>Select Employee</option>
								<option value="Employee 1">Employee 1</option>
								<option value="Employee 2">Employee 2</option>
								<option value="Employee 3">Employee 3</option>
								<option value="Employee 4">Employee 4</option>
							  </select>
							<label class="fieldlabels">Points: *</label> 
							<input class="popupinput" type="number" name="duration" placeholder="Duration" />
							<label class="fieldlabels">Department: *</label> 
							<input class="popupinput" type="text" name="speed" placeholder="Department" /> 
							<input type="checkbox" id="check1" name="check1">
							<label for="check1"> Send instant notification </label>
                        </div> 
						<input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="steps">Step 2 - 3</h2>
                                </div>
                            </div> 
							<label class="radio-img">
							<input type="radio" name="layout" />
							<div class="badge-image" style="background-image: url(https://image.freepik.com/free-vector/realistic-glass-trophy-awards-soccer_107791-2710.jpg)"></div>
						  </label>
						  
						  <label class="radio-img">
							<input type="radio" name="layout" />
							<div class="badge-image" style="background-image: url(https://image.freepik.com/free-vector/realistic-vector-square-podium-with-prize-top_134830-668.jpg)"></div>
						  </label>
						  
						  <label class="radio-img">
							<input type="radio" name="layout" />
							<div class="badge-image" style="background-image: url(https://image.freepik.com/free-vector/trophy-award-laurel-wreath-composition-with-realistic-image-golden-cup-decorated-with-garland-with-reflection_1284-32301.jpg)"></div>
						  </label>

						  <label class="radio-img">
							<input type="radio" name="layout" />
							<div class="badge-image" style="background-image: url(https://image.freepik.com/free-vector/glass-trophy-realistic-concept-with-champion-leadership-symbols_1284-31640.jpg)"></div>
						  </label>

						  <label class="radio-img">
							<input type="radio" name="layout" />
							<div class="badge-image" style="background-image: url(https://img.freepik.com/free-vector/realistic-golden-championship-trophy-cup_1284-38814.jpg?size=338&ext=jpg)"></div>
						  </label>
							<br>
							<input type="checkbox" id="check2" name="check2">
							<label for="check2"> Public </label>
                        </div> 
						<input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
					<fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="steps">Step 3 - 3</h2>
                                </div>
                            </div> 
							<p>Monthly Award To Employee Name/ Not assigned </p>
							<p>Award details: Award description text</p>
							<p>Points: 5000</p>
							<span>Badge:</span>
							<div class="badge-image">
								<img src="https://image.freepik.com/free-vector/trophy-award-laurel-wreath-composition-with-realistic-image-golden-cup-decorated-with-garland-with-reflection_1284-32301.jpg">
							</div>
                        </div> 
						<input type="submit" name="next" class="next action-button" value="Create" /> 
						 <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
		
      </div>
    </div>
  </div>
</div>


<?php include ('footer.php'); ?>




</body>
</html>