<?php require_once("cann.php");
      require_once("sexx.php"); 

 $new = ($_GET['mont']);
  $new2 = $new.'s';


  $yy = substr($new,3);
  $mm = substr($new,0,3);

  $mm2 = strtoupper($mm);

$resum = mysqli_query($conn, "SELECT SUM(msave) AS value_sum FROM $new2"); 
$row = mysqli_fetch_assoc($resum); 
$summy2 = $row['value_sum'];

$summy = number_format($summy2,2);

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
        <title>Savings report</title>
		
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
						     <h3 class="page-title">Savings report for <?php echo $mm2.' '.$yy;?> :: Total savings ₦<?php echo $summy; ?></h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboardad.php">Dashboard</a></li>
									 
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped table-nowrap custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>S/N</th>
											<th>Full name</th>
											<th>Email address</th>
											<th>Amount saved (₦)</th>
										 
										</tr>
									</thead>
									<tbody>

		  <?php 
                   $kan = 1;
                         $query331 = mysqli_query($conn, "SELECT * FROM $new2");
                           while ($row=mysqli_fetch_assoc($query331)) {
                            $id2=$row['id'];
                            $fully=$row['fulln'];
                             $msave2=$row['msave'];
                             $msave2 = number_format($msave2,2);
                             $email2=$row['email'];
            
            ?>  
										<tr>
											<td><?php echo $kan; ?></td>
										    <td>
												<h2 class="table-avatar">
													 
													<a href="#"><?php echo $fully; ?></a>
												</h2>
											</td>
											
											<td><?php echo $email2; ?></td>
											<td><?php echo $msave2; ?></td>
											 
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
													 <a class="dropdown-item" data-toggle="modal" data-target="#edsave<?php echo $id2;?>"  href=""><i class="fa fa-pencil m-r-5"></i> Edit this figure for <?php echo $fully; ?>'s  <?php echo $mm2.' '.$yy;?> savings</a>
														 
													</div>
												</div>
											</td>
										</tr>

											<!-- Add Role Modal -->
				<div id="edsave<?php echo $id2;?>" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Modify amount <?php echo $sname1; ?> saved</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="" enctype="multipart/form-data">
									<div class="form-group">
									 <label>Specify only figure (N) <span class="text-danger">*</span></label>
										<input name="msave" class="form-control" type="number" value="<?php echo $msave1;?>" required>
										<input type="hidden" name="ide" value="<?php echo $id1;?>">
									</div>
									<div class="submit-section">
										<button  type="submit" name="seev" class="btn btn-info submit-btn">Update now</button>
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