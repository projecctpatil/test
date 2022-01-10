<?php include ('header.php'); ?>


	<div class="mcw">
		<div class="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="row">
							<div class="col-md-12 d-flex">
								<div class="card ctm-border-radius shadow-sm grow flex-fill">
									<div class="card-header">
										<h4 class="card-title mb-0">Company Details</h4>
									</div>
									<?php if ($this->session->flashdata('add_company')) { ?>
										<p class="alert alert-success text-center" ><?php echo $this->session->flashdata('add_company'); ?></p>
									<?php } ?>
									<?php if ($this->session->flashdata('not_company')) { ?>
										<p class="alert alert-danger text-center" ><?php echo $this->session->flashdata('not_company'); ?></p>
									<?php } ?>
									<form action="add_company" method="POST">
											<div class="form-group col-xl-6 col-lg-6 col-md-12">
												<div class="input-group mb-3">
													<input class="form-control" name="company_name" type="text" placeholder="Company Name">
													<input class="form-control" name="c_date" type="hidden" value="<?php echo date('d-m-yy'); ?>" placeholder="c_date">
												</div>
											</div>
											<div class="form-group col-xl-6 col-lg-6 col-md-12">
												<div class="input-group mb-3">
													<input class="form-control" name="registered_company_number" type="text" placeholder="Registered Company Number">
												</div>
											</div>
											<div class="form-group col-xl-6 col-lg-6 col-md-12">
												<div class="input-group mb-3">
													<input class="form-control" name="email" type="email" placeholder="Email">
												</div>
											</div>
											<div class="form-group col-xl-6 col-lg-6 col-md-12">
												<div class="input-group mb-3">
													<input class="form-control" name="contact_number" type="number" placeholder="Contact number">
												</div>
											</div>
											<div class="form-group col-xl-6 col-lg-6 col-md-12">
												<div class="input-group mb-3">
													<input class="form-control datetimepicker" name="date" type="date" placeholder="Incorporation Date">
												</div>
											</div>
											<div class="form-group col-xl-6 col-lg-6 col-md-12">
												<div class="input-group mb-3">
													<input class="form-control" name="vat_number" type="number" placeholder="Vat Number">
												</div>
											</div>
											<div class="form-group col-xl-6 col-lg-6 col-md-12">
												<div class="input-group mb-3">
													<input class="form-control" name="address_line_1" type="text" placeholder="address_line_1">
												</div>
											</div>
											<div class="form-group col-xl-6 col-lg-6 col-md-12">
												<div class="input-group mb-3">
													<input class="form-control" name="address_line_2" type="text" placeholder="Address Line2">
												</div>
											</div>
											<div class="form-group col-xl-6 col-lg-6 col-md-12">
												<div class="input-group mb-3">
													<input class="form-control" name="city" type="text" placeholder="City">
												</div>
											</div>
											<div class="form-group col-xl-6 col-lg-6 col-md-12">
												<div class="input-group mb-3">
													<input class="form-control" name="country" type="text" placeholder="Country">
												</div>
											</div>
											<div class="form-group col-xl-6 col-lg-6 col-md-12">
												<div class="input-group mb-3">
													<input class="form-control" name="post_code" type="number" placeholder="Post-Code">
												</div>
											</div>
											<div class="form-group col-xl-12 col-lg-12 col-md-12">
												<div class="input-group mb-3">
													<button class="btn btn-success text-white" type="submit"> Submit </button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							</form>
							<!--<div class="col-md-5 d-flex">
								<div class="card ctm-border-radius shadow-sm grow flex-fill">
									<div class="card-header">
										<h4 class="card-title mb-0">
											Contact
										</h4>
									</div>
									<div class="card-body">
										<div class="input-group mb-3">
											<input type="text" class="form-control" placeholder="Contact" value="07448503267">
											<div class="input-group-append">
												<button class="btn btn-theme text-white" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
											</div>
										</div>
										<div class="input-group mb-3">
											<input type="text" class="form-control" placeholder="focustechnology.com">
											<div class="input-group-append">
												<button class="btn btn-theme text-white" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
											</div>
										</div>
										<div class="input-group mb-0">
											<input type="email" class="form-control" placeholder="hr@focustechnology.com">
											<div class="input-group-append">
												<button class="btn btn-theme text-white" type="button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>-->
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