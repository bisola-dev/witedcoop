<?php require_once("cann.php");
      require_once("sexx.php");

    $ide = mysqli_real_escape_string($conn, strip_tags($_GET['id']));
    $yidh = mysqli_real_escape_string($conn, strip_tags($_GET['yidh']));

     $yid2 = 'clinton'.$ide;
     $yidh2 = md5($yid2);

     if ($yidh2 != $yidh){header("Location:logout.php");}


  $cos = mysqli_query($conn,"SELECT * FROM loanrec WHERE id = $ide AND aktivate = 0");
   $komo = mysqli_num_rows($cos);
    if ($komo != 1){header("Location:logout2.php");}

                                 while ($row=mysqli_fetch_assoc($cos)) {
                                      $loaname2 = $row['loaname'];
                                      $amuntt2 = $row['amuntt'];
                                      $periodd2 = $row['periodd'];
                                      $interestt2 = $row['interestt'];
                                      $totalpayment2 = $row['totalpayment'];
                                       $monthpay2 = $row['monthpay'];
                                      $benefmail2 = $row['benefmail'];
                                      $dateapply2 = $row['dateapply'];
                                      $payslip2 = $row['payslip'];
                                      $guaranto12 = $row['guaranto1'];
                                      $guaranto1app2 = $row['guaranto1app'];
                                      $guaranto22 = $row['guaranto2'];
                                      $guaranto2app2 = $row['guaranto2app'];
                                      $guaranto32 = $row['guaranto3'];
                                      $guaranto3app2 = $row['guaranto3app'];
                                      $approvdate2 = $row['approvdate'];
                                      $aktivate2 = $row['aktivate'];
                                      $statuz2 = $row['statuz'];
                                    }

    $shian1 = mysqli_query($conn,"SELECT * FROM memberz WHERE email = '$guaranto12'");
                          while ($row=mysqli_fetch_assoc($shian1)) {
                                       $titl1 = $row['titl'];
                                       $sur1 = $row['sname'];
                                      $odas1=  $row['onames'];
                                    $fully1 = $titl1.' '.$sur1.' '.$odas1;   
                                  }  

              $shian2 = mysqli_query($conn,"SELECT * FROM memberz WHERE email = '$guaranto22'");
                          while ($row=mysqli_fetch_assoc($shian2)) {
                                       $titl2 = $row['titl'];
                                       $sur12 = $row['sname'];
                                      $odas2=  $row['onames'];
                                    $fully2 = $titl2.' '.$sur12.' '.$odas2;   
                                  } 

   $shian3 = mysqli_query($conn,"SELECT * FROM memberz WHERE email = '$guaranto32'");
                          while ($row=mysqli_fetch_assoc($shian3)) {
                                       $titl3 = $row['titl'];
                                       $sur13 = $row['sname'];
                                      $odas3=  $row['onames'];
                                    $fully3 = $titl3.' '.$sur13.' '.$odas3;   
                                  } 

    

   $mimu = mysqli_query($conn, "SELECT * FROM memberz WHERE email = '$benefmail2'");
                  
          while ($row=mysqli_fetch_assoc($mimu)) {
                            $onames1 =$row['onames'];
                            $sname1 =$row['sname'];
                            $fully = $sname1.' '.$onames1;
                            $pix1 =$row['pix'];
                            $fon1 =$row['fon'];
                            $dept1 =$row['dept'];
                            $staffid =$row['staffid'];
                            $rank =$row['rank'];
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
        <title>Loan details</title>
		
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
			 
              <?php require_once('siderd.php');?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Pending loan :: applied <?php echo $dateapply2; ?></h3>
								 
							</div>
							 
						</div>
					</div>
					<!-- /Page Header -->
					
						<div class="card mb-0">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="profile-view">
										<div class="profile-img-wrap">
											<div class="profile-img">
												<a href="#">
													<img src="memb/<?php echo $pix1; ?>" alt="">
												</a>
											</div>
										</div>
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-5">
													<div class="profile-info-left">
														<h3 class="user-name m-t-0">Loan applicant</h3>
														<h5 class="company-role m-t-0 mb-0"><?php echo $fully; ?></h5>
														<small class="text-muted"><?php echo $rank; ?></small>
														<div class="staff-id">Staff number : <?php echo $staffid; ?></div>
														 
													</div>
												</div>
												<div class="col-md-7">
													<ul class="personal-info">
														<li>
															<span class="title">Phone:</span>
															<span class="text"><a href="#"><?php echo $fon1; ?></a></span>
														</li>
														<li>
															<span class="title">Loan:</span>
															<span class="text"><b><?php echo $loaname2; ?></b></span>
														</li>
														<li>
															<span class="title">Amount:</span>
															<span class="text"><b>₦<?php echo $amuntt2; ?></b></span>
														</li>
														<li>
															<span class="title">Period:</span>
															<span class="text"><b><?php echo $periodd2; ?> month(s)</b></span>
														</li>
														<li>
															<span class="title">Interest:</span>
															<span class="text"><b><?php echo $interestt2; ?>%</b></span>
														</li>
														<li>
															<span class="title">To return:</span>
															<span class="text"><b>₦<?php echo $totalpayment2.' at ₦'.$monthpay2.' per month'; ?></b></span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> 
					 
				  <div class="row">
										  <div class="uploaded-box">
												<div class="uploaded-img">
												 <img width="500px" src="loanslip/<?php echo $payslip2;?>" class="img-fluid" alt="">
												</div>
										 </div>
				  </div>

					<div class="row">  
					       <div class="col-12 col-md-6 col-lg-4 d-flex">
								<div class="card flex-fill">
									<div class="card-header">
										<h5 class="card-title mb-0">Guarantor 1</h5>
									</div>
									<div class="card-body">
										<p class="card-text"><?php echo $fully1; ?></p>
							<?php if ($guaranto1app2 =="") {$boto = 'danger'; $stata = 'Pending approval';} else {$boto = 'success'; $stata = 'Approved '.$guaranto1app2;;} ?>
								<a class="btn btn-<?php echo $boto;?>" href="#"><?php echo $stata;?></a>
									</div>
								</div>
							</div>

							 <div class="col-12 col-md-6 col-lg-4 d-flex">
								<div class="card flex-fill">
									<div class="card-header">
										<h5 class="card-title mb-0">Guarantor 2</h5>
									</div>
									<div class="card-body">
										<p class="card-text"><?php echo $fully2; ?></p>
									<?php if ($guaranto2app2 =="") {$boto = 'danger'; $stata = 'Pending approval';} else {$boto = 'success'; $stata = 'Approved '.$guaranto2app2;} ?>
								<a class="btn btn-<?php echo $boto;?>" href="#"><?php echo $stata;?></a>
									</div>
								</div>
							</div>

							 <div class="col-12 col-md-6 col-lg-4 d-flex">
								<div class="card flex-fill">
									<div class="card-header">
										<h5 class="card-title mb-0">Guarantor 3</h5>
									</div>
									<div class="card-body">
										<p class="card-text"><?php echo $fully3; ?></p>
										<?php if ($guaranto3app2 =="") {$boto = 'danger'; $stata = 'Pending approval';} else {$boto = 'success'; $stata = 'Approved '.$guaranto3app2;} ?>
								<a class="btn btn-<?php echo $boto;?>" href="#"><?php echo $stata;?></a>
									</div>
								</div>
							</div>

		<?php if (!empty($guaranto1app2) AND !empty($guaranto2app2) AND !empty($guaranto3app2))
            
            { $bata = 'info'; $stato = 'Approved this loan'; $refe = 'adprove.php?ide='.$ide.'&yidh='.$yidh;} else {$bata = 'danger'; $stato = 'Pending approval - all guarantors must approve first'; $refe = '';}   
		 ?>
								 <div class="col-12 col-md-6 col-lg-4 d-flex">
								<div class="card flex-fill">
									<div class="card-header">
										<h5 class="card-title mb-0">Admin's approval</h5>
									</div>
									<div class="card-body">
										<p class="card-text"><?php echo $coopname; ?></p>
										 
								<a class="btn btn-<?php echo $bata;?>" href="<?php echo $refe;?>" onclick="return confirm('Are you sure you want to give final approval to this loan? If yes, click ok')"><?php echo $stato;?></a>
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
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>

</html>