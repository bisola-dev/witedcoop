<?php require_once("cann.php");
      require_once("sexx2.php");
      
  

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
        <title>Pending loans</title>
		
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
								<h3 class="page-title">Pending loans</h3>
								 
							</div>
							 
						</div>
					</div>
					<!-- /Page Header -->
					
					 
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0">
									<thead>
										<tr>
											<th>S/N</th>
											<th>Loan</th>
											<th>Amount(N)</th>
											<th>Period(months)</th>
											<th>Interest (%)</th>
											<th>Application date</th>
											<th>Details</th>
											 
										</tr>
									</thead>
									<tbody>

			 <?php   $kan = 1;
                    $cos = mysqli_query($conn,"SELECT * FROM loanrec WHERE benefmail = '$mymalx' AND aktivate = 2");
                                      while ($row=mysqli_fetch_assoc($cos)) {
                                      $yid = $row['id'];
                                      $yid2 = 'clinton'.$yid;
                                      $yidh = md5($yid2);
                                      $loaname = $row['loaname'];
                                      $amuntt = $row['amuntt'];
                                      $intrestt = $row['interestt'];
                                      $periodd = $row['periodd'];
                                      $dateapply = $row['dateapply'];
                                      $deta = 'loandet.php?id='.$yid.'&yidh='.$yidh;
                          ?>   
									 <tr>
											<td><?php echo $kan;?></td>
											<td><?php echo $loaname; ?></td>
											<td><?php echo $amuntt; ?></td>
											<td><?php echo $periodd; ?></td>
											<td><?php echo $intrestt; ?></td>
											<td><?php echo $dateapply; ?></td>
									  <td><a href="<?php echo $deta;?>"><button type="button" class="btn btn-info">View details</button></a></td>
								 </tr>
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
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>

</html>