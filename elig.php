<?php require_once("cann.php");
      require_once("sexx.php"); 
 

//reset password
if (isset($_POST['clikloan'])){
     
     $eligx = mysqli_real_escape_string($conn, strip_tags($_POST['elig'])); 
      $coletx = mysqli_real_escape_string($conn, strip_tags($_POST['colet'])); 
     $maxloanx = mysqli_real_escape_string($conn, strip_tags($_POST['maxloan']));
     $garax =  mysqli_real_escape_string($conn, strip_tags($_POST['gara']));
     $lpayx = mysqli_real_escape_string($conn, strip_tags($_POST['lpay']));

  $mysqlu2 = mysqli_query($conn, "UPDATE basik SET elig = $eligx, colet = $coletx, maxloan = $maxloanx, gara = $garax, lpay = $lpayx WHERE id = 1"); 
            
  echo'<script type="text/javascript"> 
    alert("Loan eligibility terms updated successfully. Thank you.");
      </script>';
   }

    $resultt = mysqli_query($conn, "SELECT * FROM basik WHERE id = 1");
         
          if ($komo != 1){header("Location:logout.php");}
                
             while($get_info = mysqli_fetch_assoc($resultt)){ // Start looping table row 
                                         $elig1 = $get_info['elig'];
                                         $colet1 = $get_info['colet'];
                                         $maxloan = $get_info['maxloan'];
                                         $gara = $get_info['gara'];
                                         $lpay = $get_info['lpay'];
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
        <title>Loan eligibility settings</title>
		
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
								<h3 class="page-title">Members loan eligibility terms</h3>
								<ul class="breadcrumb">
									<li class="item">Members must have joined for <?php echo $elig1 ?> months before having access to request for loan.</li>
									<li class="item">Members can only access x<?php echo $colet1; ?> of the total amount in savings</li>

									<li class="item">Members will pay N<?php echo $lpay; ?> for loan application form before loan can be further processed.</li>

									<li class="item">Members can only request for loan with monthly repayment not above <?php echo $maxloan; ?> % of their salary.</a></li>

									<li class="item">Members need <?php echo $gara; ?> guarantors' approval on the App as prerequisite to enable admin take further action on the loan requests.</li>
  
								</ul>
							</div>

								<div class="col-auto float-right ml-auto">
								<a href="#" class="btn btn-success" data-toggle="modal" data-target="#lsq"><i class="fa fa-lock"></i> Modify eligibility settings</a>
								 
							</div>

						</div>
					</div>
					<!-- /Page Header -->
						<!-- Add Role Modal -->
				<div id="lsq" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Modify loan request eligibility</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="">
									 
									<div class="form-group">
									 <label>Minimum month of membership before loan request (months)<span class="text-danger">*</span></label>
										<input name="elig" value="<?php echo $elig1;?>" class="form-control" type="number" required>
									</div>

									<div class="form-group">
									 <label>Maximum amount you can collect x<?php echo $colet1; ?> of total savings<span class="text-danger">*</span></label>
										<input name="colet" value="<?php echo $colet1;?>" class="form-control" type="number" required>
									</div>

									<div class="form-group">
									 <label>Maximum percentage of salary for monthly loan repayment (%)<span class="text-danger">*</span></label>
										<input name="maxloan" value="<?php echo $maxloan;?>" class="form-control" type="number" required>
									</div>

									<div class="form-group">
									 <label>Number of guarantors : <?php echo $gara; ?> before admin processes further<span class="text-danger">*</span></label>
										<input name="gara" value="<?php echo $gara;?>" class="form-control" type="number" required>
									</div>



									<div class="form-group">
									 <label>Loan application form fee (N)<span class="text-danger">*</span></label>
										<input name="lpay" value="<?php echo $lpay;?>" class="form-control" type="number" required>
									</div>
 
									<div class="submit-section">
										<button  type="submit" name="clikloan" class="btn btn-info submit-btn">Update now</button>
									</div>
								</form>
							</div>
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