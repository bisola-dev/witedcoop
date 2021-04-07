<?php require_once("cann.php");
      require_once("sexx2.php"); 

  $memmem = mysqli_query($conn, "SELECT * FROM memberz WHERE dob = '2022-02-22'");
   $kanta = mysqli_num_rows($memmem);

  
        
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>My Dividend balance</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			    <?php require_once('hedad2.php');?>
			  
              <?php require_once('siderd2.php');?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
				
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">My Dividends </h3>
								 
							</div>
							 
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card-group m-b-30">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Total dividends paid</span>
											</div>
											 
										</div>
										<h3 class="mb-3">₦2,400</h3>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							
							 
							 
							</div>
						</div>	
					</div>
					
					 
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										 	<tr>
											<th>S/N</th>
											 <th>Name</th>
											 <th>Amount (₦)</th>
											 
										</tr>
									</thead>
									<tbody>

		                                 <tr>
											<td>1</td>
											  
											<td width="230px">2020 Annual dividend</td>
											
										    <td>1,400</td>
											 
											 
										</tr>

										 <tr>
											<td>2</td>
											  
											<td width="230px">2021 Annual dividend</td>
											
										    <td>1,000</td>
											 
											 
										</tr>
				 
						 
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Add Ticket Modal -->
				<div id="add_ticket" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Ticket</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Ticket Subject</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Ticket Id</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Assign Staff</label>
												<select class="select">
													<option>-</option>
													<option>Mike Litorus</option>
													<option>John Smith</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Client</label>
												<select class="select">
													<option>-</option>
													<option>Delta Infotech</option>
													<option>International Software Inc</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Priority</label>
												<select class="select">
													<option>High</option>
													<option>Medium</option>
													<option>Low</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>CC</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Assign</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Ticket Assignee</label>
												<div class="project-members">
													<a title="John Smith" data-placement="top" data-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-02.jpg" alt="">
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Add Followers</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Ticket Followers</label>
												<div class="project-members">
													<a title="Richard Miles" data-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-09.jpg" alt="">
													</a>
													<a title="John Smith" data-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-10.jpg" alt="">
													</a>
													<a title="Mike Litorus" data-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-05.jpg" alt="">
													</a>
													<a title="Wilmer Deluna" data-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-11.jpg" alt="">
													</a>
													<span class="all-team">+2</span>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control"></textarea>
											</div>
											<div class="form-group">
												<label>Upload Files</label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Ticket Modal -->
				
				<!-- Edit Ticket Modal -->
				<div id="edit_ticket" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Ticket</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Ticket Subject</label>
												<input class="form-control" type="text" value="Laptop Issue">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Ticket Id</label>
												<input class="form-control" type="text" readonly value="TKT-0001">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Assign Staff</label>
												<select class="select">
													<option>-</option>
													<option selected>Mike Litorus</option>
													<option>John Smith</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Client</label>
												<select class="select">
													<option>-</option>
													<option >Delta Infotech</option>
													<option selected>International Software Inc</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Priority</label>
												<select class="select">
													<option>High</option>
													<option selected>Medium</option>
													<option>Low</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>CC</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Assign</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Ticket Assignee</label>
												<div class="project-members">
													<a title="John Smith" data-placement="top" data-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-02.jpg" alt="">
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Add Followers</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Ticket Followers</label>
												<div class="project-members">
													<a title="Richard Miles" data-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-09.jpg" alt="">
													</a>
													<a title="John Smith" data-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-10.jpg" alt="">
													</a>
													<a title="Mike Litorus" data-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-05.jpg" alt="">
													</a>
													<a title="Wilmer Deluna" data-toggle="tooltip" href="#" class="avatar">
														<img src="assets/img/profiles/avatar-11.jpg" alt="">
													</a>
													<span class="all-team">+2</span>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control"></textarea>
											</div>
											<div class="form-group">
												<label>Upload Files</label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Ticket Modal -->
				
				<!-- Delete Ticket Modal -->
				<div class="modal custom-modal fade" id="delete_ticket" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Ticket</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Ticket Modal -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/orange/tickets.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 11:59:37 GMT -->
</html>