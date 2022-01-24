<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include ('header.php'); ?>


<div class="mcw">
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 col-lg-12  col-md-12">
				<div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card grow">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center breaking-news bg-white">
							<div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news">
								<span class="d-flex align-items-center">&nbsp;LOGO</span>
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
									<h4 class="card-title">Your Points</h4>
									<p class="card-text">5000</p>
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
									<h4 class="card-title">Your Badges</h4>
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
									<h4 class="card-title">Redeemed</h4>
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
									<h4 class="card-title">Your Happy Index</h4>
									<p class="card-text">9.8</p>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6 d-flex">
						<div class="card ctm-border-radius shadow-sm flex-fill grow employee-live-challenge">
							<div class="card-header">
								<h4 class="card-title mb-0">Your Live Challenges</h4>
							</div>
							<?php if ($this->session->flashdata('create_challenge')) { ?>
								<p class="alert alert-success text-center" ><?php echo $this->session->flashdata('create_challenge'); ?></p>
							<?php } ?>
							
							<div class="card-body">
								<div class="Content">
									<div class="emp-join-challenge">
										<div class="row">
											<div class="col-6">
												<img src="https://t3.ftcdn.net/jpg/04/59/45/34/240_F_459453406_kbQZI2lPJmqaNVdexiRI0yrOEeQydJTH.jpg">
											</div>
											<div class="col-6 joinchallenge-caption">
												<p>Looks like you have not tried our challenges yet!!</p>
												<p style="color: chocolate;">Join Challenges now to earn cool rewards!! </p>
											</div>
										</div>
									</div>
									<!--<ul class="List">
										<li class="List-item">
											<div class="list-item-title">
												<span>WalkOn</span>
												<button class="btn" data-toggle="modal" data-target="#exampleModalCenterwalkon">
													<i class="fas fa-plus"></i>
												</button>	
											</div>
											<div class="circle_percent" data-percent="<?php //echo $walkon; ?>">
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
								  
										<li class="List-item">
											<div class="list-item-title">
												<span>SprintOn</span>
												<button class="btn" data-toggle="modal" data-target="#exampleModalCentersprinton"><i class="fas fa-plus"></i></button>
											</div>
											<div class="circle_percent" data-percent="<?php //echo $stepon; ?>">
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
									  
										<li class="List-item">
											<div class="list-item-title">
												<span>PedalOn</span>
												<button class="btn" data-toggle="modal" data-target="#exampleModalCenterpedalon"><i class="fas fa-plus"></i></button>
											</div>
											<div class="circle_percent" data-percent="<?php //echo $pedalon; ?>">
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
									
									</ul>-->
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
								<div class="wrapper">

									<label>20K Walkamaniac</label>
									<div class="progress-item">
										<div class="emp-progress-bar">
										    <div class="bar" data-size="30">
										    	<span class="perc"></span>
										    </div>
										</div>
										<button class="btn" data-toggle="modal" data-target="#joinchallenge">
											Join
										</button>
									</div>

									<label>20K Walkamaniac</label>
									<div class="progress-item">
										<div class="emp-progress-bar">
										    <div class="bar" data-size="40">
										    	<span class="perc"></span>
										    </div>
										</div>
										<button class="btn" data-toggle="modal" data-target="#joinchallenge">
											Join
										</button>
									</div>

									<label>20K Walkamaniac</label>
									<div class="progress-item">
										<div class="emp-progress-bar">
										    <div class="bar" data-size="60">
										    	<span class="perc"></span>
										    </div>
										</div>
										<button class="btn" data-toggle="modal" data-target="#joinchallenge">
											Join
										</button>
									</div>


									<label>20K Walkamaniac</label>
									<div class="progress-item">
										<div class="emp-progress-bar">
										    <div class="bar" data-size="80">
										    	<span class="perc"></span>      
										    </div>
										</div>
										<button class="btn" data-toggle="modal" data-target="#joinchallenge">
											Join
										</button>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 d-flex">

						<div class="card recent-acti flex-fill shadow-sm grow">
							<div class="card-header">
								<h4 class="card-title mb-0 d-inline-block">Offers from Famous Brands</h4>
								<a href="javascript:void(0)" class="d-inline-block float-right text-primary"><i class="lnr lnr-sync"></i></a>
							</div>
							<div class="card-body recent-activ admin-activ">

								<div class="carouseloffers slick">
								  	<div class="item">
								  		<img src="https://image.freepik.com/free-vector/realistic-new-year-vertical-poster-template_52683-77040.jpg">
								  	</div>
								  	<div class="item">
								  		<img src="https://image.freepik.com/free-vector/realistic-new-year-vertical-poster-template_52683-77040.jpg">
								  	</div>
								  	<div class="item">
								  		<img src="https://image.freepik.com/free-vector/realistic-new-year-vertical-poster-template_52683-77040.jpg">
								  	</div>
								  	<div class="item">
								  		<img src="https://image.freepik.com/free-vector/realistic-new-year-vertical-poster-template_52683-77040.jpg">
								  	</div>
								  	<div class="item">
								  		<img src="https://image.freepik.com/free-vector/realistic-new-year-vertical-poster-template_52683-77040.jpg">
								  	</div>
								  	<div class="item">
								  		<img src="https://image.freepik.com/free-vector/realistic-new-year-vertical-poster-template_52683-77040.jpg">
								  	</div>
								</div>

							</div>
						</div>
					</div>
					
					
					
					<div class="col-lg-6 col-md-12 d-flex">

						<div class="card recent-acti flex-fill shadow-sm grow">
							<div class="card-header">
								<h4 class="card-title mb-0 d-inline-block">Your Achievements</h4>
								<a href="javascript:void(0)" class="d-inline-block float-right text-primary"><i class="lnr lnr-sync"></i></a>
							</div>
							<div class="card-body recent-activ admin-activ">
								<div class="achievement-main">
								<div class="achievement-item">
									<div class="row">
										<div class="stat-part col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
											<img src="assets/img/avatar_placeholder_2_purple.png" alt="Avatar" class="achievement-avatar">
										</div>
										<div class="stat-part col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
										</div>
										<div class="stat-part col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
											<h6>2000 points</h6>
										</div>
									</div>
								</div>
								<div class="achievement-item">
									<div class="row">
										<div class="stat-part col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
											<img src="assets/img/avatar_placeholder_2_purple.png" alt="Avatar" class="achievement-avatar">
										</div>
										<div class="stat-part col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
										</div>
										<div class="stat-part col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
											<h6>2000 points</h6>
										</div>
									</div>
								</div>
								<div class="achievement-item">
									<div class="row">
										<div class="stat-part col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
											<img src="assets/img/avatar_placeholder_2_purple.png" alt="Avatar" class="achievement-avatar">
										</div>
										<div class="stat-part col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
										</div>
										<div class="stat-part col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
											<h6>2000 points</h6>
										</div>
									</div>
								</div>
								<div class="achievement-item">
									<div class="row">
										<div class="stat-part col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
											<img src="assets/img/avatar_placeholder_2_purple.png" alt="Avatar" class="achievement-avatar">
										</div>
										<div class="stat-part col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
										</div>
										<div class="stat-part col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
											<h6>2000 points</h6>
										</div>
									</div>
								</div>
								<div class="achievement-item">
									<div class="row">
										<div class="stat-part col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
											<img src="assets/img/avatar_placeholder_2_purple.png" alt="Avatar" class="achievement-avatar">
										</div>
										<div class="stat-part col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
										</div>
										<div class="stat-part col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
											<h6>2000 points</h6>
										</div>
									</div>
								</div>
							</div>
							</div>
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




</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenterwalkon" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <li class="active" id="account"><strong>Define Event</strong></li>
                        <li id="personal"><strong>Create your Badge</strong></li>
                        <!-- <li id="payment"><strong>Summary</strong></li> -->
						<li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="steps">Step 1 - 3</h2>
                                </div>
                            </div> 
                            <input type="hidden" name="popular" value="walkon">
							<label class="fieldlabels">Name: *</label> 
							<input type="text" name="name" placeholder="Name" /> 
							<label class="fieldlabels">Start Date: *</label> 
							<input type="date" name="start_time" placeholder="Start Date" /> 
							<label class="fieldlabels">End Date: *</label> 
							<input type="date" name="end_time" placeholder="End Date" /> 
							<label class="fieldlabels">Number of Steps: *</label> 
							<input type="number" name="step_count" placeholder="No. of Steps" /> 
							<label class="fieldlabels">Message: </label> 
							<textarea id="msg" rows="3" name="description"></textarea>
							<label class="fieldlabels">Points: *</label> 
							<input type="number" name="points" placeholder="Points" />
							<label class="fieldlabels">Duration: *</label> 
							<input type="number" name="duration" placeholder="Duration" />
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
							<input type="radio" id="name" name="b_name" value="30">
							<label class="fieldlabels fieldlabelradio" for="standard">Standard</label>
							<input type="radio" id="name" name="b_name" value="60">
							<label class="fieldlabels fieldlabelradio" for="power">Power</label>
							<br>
                        </div> 
						<input type="submit" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully created a challenge!</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
		
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalCentersprinton" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <li class="active" id="account"><strong>Define Event</strong></li>
                        <li id="personal"><strong>Create your Badge</strong></li>
                        <!-- <li id="payment"><strong>Summary</strong></li> -->
						<li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="steps">Step 1 - 3</h2>
                                </div>
                            </div>
                            <input type="hidden" name="popular" value="stepon">
                            <label class="fieldlabels">Name: *</label> 
							<input type="text" name="name" placeholder="Name" /> 
							<label class="fieldlabels">Start Date: *</label> 
							<input type="date" name="start_time" placeholder="Start Date" /> 
							<label class="fieldlabels">End Date: *</label> 
							<input type="date" name="end_time" placeholder="End Date" /> 
							<label class="fieldlabels">distance: *</label> 
							<input type="number" name="distance" placeholder="distance" /> 
							<label class="fieldlabels">speed: *</label> 
							<input type="number" name="speed" placeholder="speed" /> 
							<label class="fieldlabels">Message: </label> 
							<textarea id="msg" rows="3" name="description"></textarea>
							<label class="fieldlabels">Points: *</label> 
							<input type="number" name="points" placeholder="Points" />
							<label class="fieldlabels">Duration: *</label> 
							<input type="number" name="duration" placeholder="Duration" />
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
							<input type="radio" id="name" name="b_name" value="30">
							<label class="fieldlabels fieldlabelradio" for="standard">Standard</label>
							<input type="radio" id="name" name="b_name" value="60">
							<label class="fieldlabels fieldlabelradio" for="power">Power</label>
							<br>
                        </div> 
						<input type="submit" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully created a challenge!</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
		
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenterpedalon" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <li class="active" id="account"><strong>Define Event</strong></li>
                        <li id="personal"><strong>Create your Badge</strong></li>
                        <!-- <li id="payment"><strong>Summary</strong></li> -->
						<li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col">
                                    <h2 class="steps">Step 1 - 3</h2>
                                </div>
                            </div>
                            <input type="hidden" name="popular" value="pedalon">
                            <label class="fieldlabels">Name: *</label> 
							<input type="text" name="name" placeholder="Name" /> 
							<label class="fieldlabels">Start Date: *</label> 
							<input type="date" name="start_time" placeholder="Start Date" /> 
							<label class="fieldlabels">End Date: *</label> 
							<input type="date" name="end_time" placeholder="End Date" /> 
							<label class="fieldlabels">Duration: *</label> 
							<input type="number" name="duration" placeholder="Duration" />
							<label class="fieldlabels">Speed: *</label> 
							<input type="number" name="speed" placeholder="Speed" /> 
							<label class="fieldlabels">Message: </label> 
							<textarea id="msg" rows="3" name="description"></textarea>
							<label class="fieldlabels">Points: *</label> 
							<input type="number" name="points" placeholder="Points" />
							<label class="fieldlabels">Duration: *</label> 
							<input type="number" name="duration" placeholder="Duration" />
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
							<input type="radio" id="name" name="b_name" value="30">
							<label class="fieldlabels fieldlabelradio" for="standard">Standard</label>
							<input type="radio" id="name" name="b_name" value="60">
							<label class="fieldlabels fieldlabelradio" for="power">Power</label>
							<br>
                        </div> 
						<input type="submit" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully created a challenge!</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
		
      </div>
    </div>
  </div>
</div>

</div>






<!-- Modal -->

<div class="modal fade create-challenge" id="joinchallenge" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      
		<!-- multistep form -->
    <div class="row justify-content-center">
        <div class="col-12 text-center">
                <form id="msform" action="" method="POST">
                    <fieldset class="first-fieldset">
                    	<h4 id="heading">Please confirm your Google Fit ID</h4>
                        <div class="form-card">
							<input class="popupinput" type="text" name="name" placeholder="Email ID" />  
                        </div> 
                        <input type="button" name="submit" class="submit-fit-id" value="Submit" />
                        <p>Disclaimer:<br>
When processing personal data, we attach great importance to protecting your private sphere and ensuring that your data are secure. We access your fitness data but we don’t store this data only for short duration till the challenges are live.  After challenges are over we delete your personal information. We comply all security compliance requirements and easy option to delete your all personal information by just one button click. As a matter of principle, we don’t pass your personal data to any third parties. We take your fitness data to evaluate fitness challenges which you are part of</p>
						<input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                    	<div class="connect-to-app">
	                        <div class="connect-progress-bar">
							  <span class="connect-bar">
							    <span class="connect-progress"></span>
							  </span>
							</div>
							<p>Please wait till we connect with your fitness app.</p>
						</div>
						<input type="button" name="next" class="next action-button" value="Next" />
						<!--<input type="submit" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />-->
                    </fieldset>
                    <fieldset>
                    	<img src="https://media1.giphy.com/media/vuOw3fiAdjVNYMBjoh/giphy.gif" width="250" />
                    	<p>Awesome, you are ready!!</p>
                    	<p>Let's go!</p>
						<input type="submit" name="next" class="next action-button" value="Continue" /> 
                    </fieldset>
                </form>
        </div>
    </div>
		
    </div>
  </div>
</div>
















<?php include ('footer.php'); ?>




</body>
</html>