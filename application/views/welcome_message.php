<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include ('header.php'); ?>


<div class="mcw">
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 col-lg-12  col-md-12">
				<!-- <div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card grow">
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
				</div> -->

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


<?php include ('footer.php'); ?>




</body>
</html>