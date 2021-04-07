<?php require_once("cann.php");
      require_once("sexx.php"); 
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
        <title>Inbox - HRMS admin template</title>
		
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
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Inbox</h3>
								 
							</div>
							 
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card mb-0">
								<div class="card-body">
									 
									<div class="email-content">
										<div class="table-responsive">
											<table class="table table-inbox table-hover">
												<thead>
													<tr>
														<th colspan="6">
															<input type="checkbox" class="checkbox-all">
														</th>
													</tr>
												</thead>
												<tbody>
												
<?php  $resultt = mysqli_query($conn, "SELECT  DISTINCT flame FROM supot WHERE dele = 0 ORDER BY id DESC");
                      while ($row=mysqli_fetch_assoc($resultt)) {
                            
                            $fidx =$row['fid'];
                             $fmsgx =$row['fmsg'];
                            $natux =$row['natu'];
                            $fdatex =$row['fdate']; 
                      ?>
													<tr class="unread clickable-row" data-href="mail-view.html">
														<td>
															<input type="checkbox" class="checkmail">
														</td>
														<td><span class="mail-important"><i class="fa fa-star starred"></i></span></td>
														<td class="name">John Doe</td>
														<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
														<td><i class="fa fa-paperclip"></i></td>
														<td class="mail-date">13:14</td>
													</tr>
												<?php } ?>
												 
													<tr class="clickable-row" data-href="mail-view.html">
														<td>
															<input type="checkbox" class="checkmail">
														</td>
														<td><span class="mail-important"><i class="fa fa-star starred"></i></span></td>
														<td class="name">Mike Litorus</td>
														<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
														<td></td>
														<td class="mail-date">10/31/16</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
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
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/orange/inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 11:59:30 GMT -->
</html>