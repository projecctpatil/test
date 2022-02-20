<?php include ('header.php'); ?>


	<div class="mcw">
		<div class="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="row">
							<div class="col-md-12 d-flex">
								<div class="card ctm-border-radius shadow-sm grow flex-fill report-card">
									<div class="card-header">
										<h4 class="card-title mb-0">Reports</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6">
												<div class="card ctm-border-radius shadow-sm grow">
													<div class="card-header">
														<h4 class="card-title mb-0 d-inline-block">Employee Participation</h4>
													</div>
													<div class="card-body">
														<div class="wrapper">
															<canvas id="Chart1"></canvas>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-12 d-flex">
												<div class="card ctm-border-radius shadow-sm grow">
													<div class="card-header">
														<h4 class="card-title mb-0 d-inline-block">Monthly Redeems</h4>
													</div>
													<div class="card-body">
														<div class="wrapper">
															<canvas id="Chart2"></canvas>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-12 d-flex">
												<div class="card ctm-border-radius shadow-sm grow">
													<div class="card-header">
														<h4 class="card-title mb-0 d-inline-block">EHI</h4>
													</div>
													<div class="card-body">
														<div class="wrapper">
															<canvas id="Chart3"></canvas>
														</div>
													</div>
												</div>
											</div>

											<div class="col-lg-6 col-md-12 d-flex">
												<div class="card ctm-border-radius shadow-sm grow">
													<div class="card-header">
														<h4 class="card-title mb-0 d-inline-block">Health Meter</h4>
													</div>
													<div class="card-body">
														<div class="wrapper">
															<canvas id="Chart4"></canvas>
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
			</div>
		</div>
	</div>

<div class="sidebar-overlay" id="sidebar_overlay"></div>


<?php include ('footer.php'); ?>


</body>


</html>