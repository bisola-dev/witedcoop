<?php require_once("cann.php");
      require_once("sexx.php"); 

if (isset($_POST["clikloan"])){

      $lname1 = mysqli_real_escape_string($conn, strip_tags($_POST['loaname'])); 
     $perod1 = mysqli_real_escape_string($conn, strip_tags($_POST['perod']));
     $intrest1 =  mysqli_real_escape_string($conn, strip_tags($_POST['intresty']));
     $obta1 = mysqli_real_escape_string($conn, strip_tags($_POST['obta']));

    if($lname1 == "" || $perod1 == ""|| $intrest1 == "" || $obta1 == ""){

      echo "<script type ='text/javascript'>
            alert('please fill the form correctly')
            </script>";
         }
 
    else {       
         $insert1 = mysqli_query($conn, "INSERT INTO loantbl (loaname, perod, intresty, obta) 
           	VALUES ('$lname1', $perod1, $intrest1, '$obta1')");
     
       echo "<script type='text/javascript'>
        alert('Loan scheme successfully created');
        </script>"; 
        }

        
    }




//reset password
if (isset($_POST['clikloan2'])){
     
     $ide1 = mysqli_real_escape_string($conn, strip_tags($_POST['ide'])); 
      $lname1 = mysqli_real_escape_string($conn, strip_tags($_POST['loaname'])); 
     $perod1 = mysqli_real_escape_string($conn, strip_tags($_POST['perod']));
     $intrest1 =  mysqli_real_escape_string($conn, strip_tags($_POST['intresty']));
     $obta1 = mysqli_real_escape_string($conn, strip_tags($_POST['obta']));

  $mysqlu2 = mysqli_query($conn, "UPDATE loantbl SET loaname = '$lname1', perod = $perod1, intresty = $intrest1, obta = '$obta1' WHERE id = $ide1"); 
            
  echo'<script type="text/javascript"> 
    alert("Loan scheme updated successfully. Thank you.");
      </script>';
   }



//delete account
if (isset($_POST['delet'])){
	   $ide1 = mysqli_real_escape_string($conn, strip_tags($_POST['ide'])); 
  $mysqlu2 = mysqli_query($conn, "UPDATE loantbl SET dele = 1 WHERE id = $ide1"); 
            
  echo '<script type="text/javascript"> 
    alert("Loan scheme deleted successfully. Thank you.");
      </script>';
   }


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
        <title>Loan settings</title>
		
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
		
			 <?php require_once('hedad.php');?>
			<!-- /Header -->
			
			<!-- Sidebar -->
              <?php require_once('siderd.php');?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Loan settings (Available scheme)</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboardad.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Leads</li>
								</ul>
							</div>

								<div class="col-auto float-right ml-auto">
								<a href="#" class="btn btn-success" data-toggle="modal" data-target="#lsq"><i class="fa fa-lock"></i> Add new loan scheme</a>
								<a href="lreq" class="btn btn-info"><i class="fa fa-user"></i> View loan requests</a>
								 
							</div>

						</div>
					</div>
					<!-- /Page Header -->
						<!-- Add Role Modal -->
				<div id="lsq" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add new loan scheme</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="">
									<div class="form-group">
									 <label>Name of loan <span class="text-danger">*</span></label>
										<input name="loaname" class="form-control" type="text" required>
									</div>

									<div class="form-group">
									 <label>Period of repayment (months)<span class="text-danger">*</span></label>
										<input name="perod" class="form-control" type="number" required>
									</div>

									<div class="form-group">
									 <label>Interest (%)<span class="text-danger">*</span></label>
										<input name="intresty" class="form-control" type="number" required>
									</div>

								   <div class="form-group">
									 <label>Is this loan independent?<span class="text-danger">*</span></label>
									    	<select class="form-control" name="obta" required>
													<option value="">-- Select --</option>
													<option value="Yes">Yes. Members can obtain the loan while servicing another active loan.</option>
													<option value="No">No. Members who are servicing  active loan will not be able to access it.</option>
												</select>
									</div>
									<div class="submit-section">
										<button  type="submit" name="clikloan" class="btn btn-info submit-btn">Submit now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped table-nowrap custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>S/N</th>
											<th>Loan</th>
											<th>Repayment period (months)</th>
											<th>Interest rate (%)</th>
											<th>Independent?</th>
											 <th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>

		  <?php 
              $memmem = mysqli_query($conn, "SELECT * FROM loantbl WHERE dele = 0");
                     $kan = 1;
                     while ($row=mysqli_fetch_assoc($memmem)) {
                               $lonid = $row['id'];
                               $lame = $row['loaname'];
                               $perod = $row['perod'];
                               $intre = $row['intresty']; 
                               $obta = $row['obta']; 
            
            
            ?>  

										<tr>
											<td><?php echo $kan; ?></td>
											<td>
												<h2 class="table-avatar">
													 
													<a href="#"><?php echo $lame; ?></a>
												</h2>
											</td>
											<td><?php echo $perod; ?></td>
											<td><?php echo $intre; ?></td>
											<td><?php echo $obta; ?></a></td>
										 
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
													 <a class="dropdown-item" data-toggle="modal" data-target="#edsave<?php echo $lonid;?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" data-toggle="modal" data-target="#delet<?php echo $lonid;?>" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>

				 <div id="edsave<?php echo $lonid;?>" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Update <?php echo $lame;?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="">
									<div class="form-group">
									 <label>Name of loan <span class="text-danger">*</span></label>
										<input name="loaname" value="<?php echo $lame;?>" class="form-control" type="text" required>
									</div>

									<input name="ide" value="<?php echo $lonid;?>" type="hidden">

									<div class="form-group">
									 <label>Period of repayment (months)<span class="text-danger">*</span></label>
										<input name="perod" value="<?php echo $perod;?>" class="form-control" type="number" required>
									</div>

									<div class="form-group">
									 <label>Interest (%)<span class="text-danger">*</span></label>
										<input name="intresty" value="<?php echo $intre;?>" class="form-control" type="number" required>
									</div>

								   <div class="form-group">
							  <label>Is this loan independent? Current status is <?php echo $obta;?><span class="text-danger">*</span></label>
									    	<select class="form-control" name="obta" required>
											 <option value="<?php echo $obta;?>">-- Select --</option>
													<option value="Yes">Yes. Members can obtain the loan while servicing another active loan.</option>
													<option value="No">No. Members who are servicing  active loan will not be able to access it.</option>
												</select>
									</div>
									<div class="submit-section">
										<button  type="submit" name="clikloan2" class="btn btn-info submit-btn">Update now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>


				<div id="delet<?php echo $lonid;?>" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title"><?php echo $lame.' '.$perod.' month(s) with '.$intre.'% interest'; ?> will no longer be available to members on the App. Are you sure you want this loan scheme deleted?</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="" method="post">
									 <input name="ide" value="<?php echo $lonid;?>" type="hidden">
									<div class="submit-section">
										 <button type="submit" name="delet" class="btn btn-danger submit-btn">Delete loan now</button>
										 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

							<?php $kan++;} ?>
										 
									 
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
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
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>

</html>