<?php require_once("cann.php");
      require_once("sexx.php"); 


 
 
    if (isset($_POST['clikloan']) || !empty($_POST['opw']) || !empty($_POST['npw'])) {

       $opw = mysqli_real_escape_string($conn, strip_tags($_POST['opw']));  
       $pwd = mysqli_real_escape_string($conn, strip_tags($_POST['npw'])); 
       $cpwd = mysqli_real_escape_string($conn, strip_tags($_POST['cpw'])); 
     
       $aba = 'CODED'.$opw;
       $hopw = md5($aba); 

       $bb = 'CODED'.$pwd;
       $hpazz2 = md5($bb); 

   if ($hopw != $myhpazz) { echo '<script type="text/javascript">
        alert("Your old password is incorrect. Please try again.");
         </script>';}

     

      //checking for at least 6 characters in the password
    else  if (strlen($pwd) < 8){
    echo '<script type="text/javascript">
        alert("Your password must be at least 8 characters");
         </script>';
        }

 //checking if password and repeat password are the same
      else if ($pwd != $cpwd){
    echo '<script type="text/javascript">
        alert("Your password and confirm password are not the same. Please retry.");
         </script>'; }
        
     else  {
    
        $result2=mysqli_query($conn, "UPDATE adminlogin SET hpazz = '$hpazz2' WHERE emal = '$mymal'");
                
        echo '<script type="text/javascript">
        alert("Change of password was successful. You are to login with your new password next time.");
         </script>'; 
     }
        
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
        <title>Change admin password</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
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
								<h3 class="page-title">Change your Admin Password.</h3>

						 <div class="card-body">
									<form action="" method="post">
										
										 
					 <div class="form-group row">
											<label class="col-form-label col-md-2">Old password</label>
											<div class="col-md-10">
												<input type="password" name="opw" class="form-control" required>
											</div>
										</div>

					 <div class="form-group row">
											<label class="col-form-label col-md-2">New password</label>
											<div class="col-md-10">
												<input type="password" minlength="8" maxlength="16" name="npw" class="form-control" required>
											</div>
										</div>

					 <div class="form-group row">
											<label class="col-form-label col-md-2">Confirm new password</label>
											<div class="col-md-10">
												<input type="password" minlength="8" maxlength="16" name="cpw" class="form-control" required>
											</div>
										</div>
 
									 	<div class="submit-section">
									<button type="submit" name="clikloan" class="btn btn-primary submit-btn m-r-10">Submit</button>
									 
								</div>


									</form>
								</div>

							 </div>

						 

						</div>
					</div>
					<!-- /Page Header -->
		  
						<!-- Add Role Modal -->
				<div id="delet" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title"><?php echo $fully; ?> will no longer be able to access the App. Are you sure you want this account deleted?</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									 
									<div class="submit-section">
										 <button type="submit" name="delet" class="btn btn-danger submit-btn">Delete account now</button>
										 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Role Modal -->
					
				 
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
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>

</html>