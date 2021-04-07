<?php require_once("cann.php");
      require_once("sexx.php"); 

 
if (isset($_POST["daddy"])){
    $monthh = mysqli_real_escape_string($conn, $_POST["monthh"]);
    $yearr = mysqli_real_escape_string($conn, $_POST["yearr"]);

       $newtable = $monthh.$yearr.'s';
       $new=$monthh.$yearr;
       $link1 ='generatesavings.php?mont='.$new;
      
$tracy = mysqli_query($conn,"select * from savrec where monthyr ='$newtable'");
$num_rows = mysqli_num_rows($tracy);

if( $monthh == ""|| $yearr == "" ){
      echo "<script type ='text/javascript'>
            alert('The month and the year must not be empty. Please retry')
            </script>";
          }


else if($num_rows==0)      //Code to see if Table Exists
  {$queryy = mysqli_query($conn, "CREATE TABLE $newtable (
                          id int(11) AUTO_INCREMENT,
                          fulln varchar(255) NOT NULL,
                          msave int (80) NOT NULL,
                          email varchar(255) NOT NULL,
                          PRIMARY KEY  (id)
                          )");

$mysqlu2 = mysqli_query($conn, "INSERT INTO savrec (monthyr) VALUES ('$newtable')"); 
    echo'<script type="text/javascript"> 
      window.location.href="'.$link1.'"
    </script>';}
 
 else if($num_rows==1) {
     echo'<script type="text/javascript"> 
      window.location.href="'.$link1.'"
    </script>';}

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
        <title>Bulk savings</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
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
		
			<!-- Header -->
            <?php require_once('hedad.php');?>
			<!-- /Header -->
			
			<!-- Sidebar -->
              <?php require_once('siderd.php');?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Generate monthly bulk savings</h3>
								<ul class="breadcrumb">
								 <li class="breadcrumb-item"><a href="svtemp.php">Savings template</a></li>
									 
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Basic Inputs</h4>
								</div>
								<div class="card-body">
									<form action="" method="post">

									   <div class="form-group row">
											<label class="col-form-label col-md-2">Month</label>
											<div class="col-md-10">
												<select name="monthh" class="form-control" required>
								    <option value="">Select month</option>
                                    <option value="jan">January</option>
                                    <option value="feb">February</option>
                                    <option value="mar">March</option>
                                    <option value="apr">April</option>
                                    <option value="may">May</option>
                                    <option value="jun">June</option>
                                    <option value="jul">July</option>
                                    <option value="aug">August</option>
                                    <option value="sep">September</option>
                                    <option value="oct">October</option>
                                    <option value="nov">November</option>
                                    <option value="dec">December</option>
												</select>
											</div>
										</div>

											<div class="form-group row">
											<label class="col-form-label col-md-2">Year</label>
											<div class="col-md-10">
												<select name="yearr" class="form-control" required>
								    <option value="">Select year</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>  
												</select>
											</div>
										</div>

							  	<div class="form-group row">
											 <div class="col-md-10">
                                            	<button type="submit" name="daddy" class="btn btn-primary submit-btn m-r-12">Proceed</button>
								             </div>
							    </div>

 
									</form>
								</div>
							</div>
						 
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/app.js"></script>
		
    </body>

</html>