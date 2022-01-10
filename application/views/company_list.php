
	<?php include ('header.php'); ?>

	<div class="mcw">
		<div class="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card shadow-sm ctm-border-radius grow">
							<div class="card-header d-flex align-items-center justify-content-between">
								<h4 class="card-title mb-0 d-inline-block">Employees</h4>
							</div>
							<div class="card-body align-center">
								<div class="employee-office-table">
									<div class="table-responsive">

										<table id="example" class="table table-striped table-bordered" style="width:100%">
									        <thead>
									            <tr>
									                <th>Name</th>
									                <th>Email</th>
									                <th>Contact Number</th>
									                <th>Start date</th>
									                <th>Action</th>
									            </tr>
									        </thead>
									        <tbody>
									        	<?php 
									        		//print_r($result);
									        		foreach($result as $obj){ ?>
									        			<tr>
											                <td>
											                	<a href="#" class="avatar"><img class="img-fluid" alt="avatar image" src="assets/img/profiles/img-10.jpg"></a>
																<h2><a href="<?php echo base_url('add_emp/'.$obj['Id'].'/'.$obj['company_name']); ?>"><?php echo $obj['company_name']; ?> </a></h2>
											                </td>
											                <td><?php echo $obj['email']; ?></td>
											                <td><?php echo $obj['contact_number']; ?></td>
											                <td><?php echo $obj['c_date']; ?></td>
											                <td>
											                	<div class="table-action">
																	<a href="edit-review.html" class="btn btn-sm btn-outline-success">
																	<span class="lnr lnr-pencil"></span> Edit
																	</a>
																	<a href="javascript:void(0);" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#delete">
																	<span class="lnr lnr-trash"></span> Delete
																	</a>
																</div>
											                </td>
											            </tr>
									        		<?php } ?>
									            
									            
									        </tbody>
									    </table>
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

<?php include ('footer.php'); ?>




</body>


</html>