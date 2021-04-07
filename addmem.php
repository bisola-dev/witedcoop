<?php require_once("cann.php");
      require_once("sexx.php"); 

// 87e25944099a7715a8350f1bf1851107

      if (isset($_POST['clickin'])){
    
   $staffid = mysqli_real_escape_string($conn, strip_tags($_POST['staffid']));
   $titl = mysqli_real_escape_string($conn, strip_tags($_POST['titl']));
   $djoin = mysqli_real_escape_string($conn, strip_tags($_POST['djoin']));
   $sname = mysqli_real_escape_string($conn, strip_tags($_POST['sname']));
   $onames = mysqli_real_escape_string($conn, strip_tags($_POST['onames']));
   $fon = mysqli_real_escape_string($conn, strip_tags($_POST['fon']));
   $email = mysqli_real_escape_string($conn, strip_tags($_POST['email']));
   $dept = mysqli_real_escape_string($conn, strip_tags($_POST['dept']));
   $rank = mysqli_real_escape_string($conn, strip_tags($_POST['rank']));
   $level = mysqli_real_escape_string($conn, strip_tags($_POST['level']));
   $balance = mysqli_real_escape_string($conn, strip_tags($_POST['balance']));
   $msave = mysqli_real_escape_string($conn, strip_tags($_POST['msave']));
   $dob = mysqli_real_escape_string($conn, strip_tags($_POST['dob']));

 $amm = 'Coop'.$email;
 $hemail = md5($amm);
 
 $queryy = mysqli_query($conn, "SELECT * FROM memberz where email='$email'");
 $komo = mysqli_num_rows($queryy);
 
  if($sname == "" || $onames == "" || $fon == "" || $email == "" || $dept == "" ||$rank== "" ||$level == "" || $balance == "" || $msave == "" ||$dob == ""  || $djoin == "") {
 echo '<script type ="text/javascript">alert("please do not submit empty form."")</script>';}
 

 else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
       echo '<script type="text/javascript">
        alert("The email provided is invalid, please retry.");
        </script>';
           
    }
          
  else if(strlen($fon)<11){
                 echo'<script type="text/javascript">
        alert("The phone number is invalid, please retry.");
        </script>';

      }

else if ($komo == 1){
      echo'<script type="text/javascript">
     alert("Sorry, this user account already exists. You may confirm from the view members link.");
        </script>'; }
      
     else{

   $mysqlu = mysqli_query($conn, "INSERT INTO memberz (staffid, sname, onames, dob, fon, email, hpazz, dept, rank, datereg, level, balance, msave, titl, djoin, hemail) VALUES ('$staffid', '$sname', '$onames', '$dob', '$fon', '$email', '87e25944099a7715a8350f1bf1851107', '$dept', '$rank', '$date_reg', '$level', '$balance', '$msave', '$titl', '$djoin', '$hemail')"); 
            
  echo'<script type="text/javascript"> 
    alert("Member successfully registered. Please inform the member to login on the app with his or her email. The default password is PASSWORD.");
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
        <title>Add new member</title>
		
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
								<h3 class="page-title">Add new member</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboardad.php">Dashboard</a></li>
									<li class="breadcrumb-item active">fields with asteriks * are compulsory</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<form action="" method="post">
								<div class="row">
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Title <span class="text-danger"></span></label>
												<input type="text" name="titl" maxlength="10" class="form-control">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Surname <span class="text-danger">*</span></label>
												<input type="text" maxlength="30" name="sname" class="form-control" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
										  <label>Other names <span class="text-danger">*</span></label>
												<input type="text" name="onames" maxlength="60" class="form-control" required>
										</div>
									</div>

									 <div class="col-sm-6 col-md-3">
										<div class="form-group">
										 <label>Email address <span class="text-danger">*</span></label>
												<input type="email" name="email" class="form-control" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
										  <label>Phone number <span class="text-danger">*</span></label>
												<input type="tel" name="fon" maxlength="14" class="form-control" required>
										</div>
									</div>


									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Date of birth<span class="text-danger">*</span></label>
											   <input class="form-control" type="date"
												name="dob"  required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Staff identity number <span class="text-danger"></span></label>
												<input type="text" maxlength="20" name="staffid" class="form-control" >
										</div>
									</div>


									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Department <span class="text-danger">*</span></label>
												<input type="text" maxlength="40" name="dept" class="form-control" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
										  <label>Designation <span class="text-danger">*</span></label>
												<input type="text" name="rank" maxlength="40" class="form-control" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
										  <label>Grade level <span class="text-danger">*</span></label>
												<input type="text" name="level" maxlength="10" class="form-control" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
										  <label>Date registered with coop<span class="text-danger">*</span></label>
												<input type="date" name="djoin" class="form-control" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
										  <label>Current savings balance (N)<span class="text-danger">*</span></label>
												<input type="number" name="balance" maxlength="10" class="form-control" required>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
										  <label>Amount saved monthly (N)<span class="text-danger">*</span></label>
												<input type="number" name="msave" maxlength="10" class="form-control" required>
										</div>
									</div>

         							 
								</div>
								 
								<div class="submit-section">
									<button type="submit" name="clickin" class="btn btn-primary submit-btn m-r-10">Submit</button>
									 
								</div>
							</form>
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
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>

</html>