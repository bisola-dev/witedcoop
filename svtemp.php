<?php require_once("cann.php");
      require_once("sexx.php"); 


//reset password
if (isset($_POST['seev'])){
	 $msave2 = mysqli_real_escape_string($conn, strip_tags($_POST['msave']));
     $ide2 = mysqli_real_escape_string($conn, strip_tags($_POST['ide']));

  $mysqlu2 = mysqli_query($conn, "UPDATE memberz SET msave = $msave2 WHERE id = $ide2"); 
            
  echo'<script type="text/javascript"> 
    alert("Monthly savings updated successfully. Thank you.");
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
        <title>View members</title>
		
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
								<h3 class="page-title">Montly savings template</h3>
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
											<th>Staff number</th>
											<th>Full name</th>
											<th>Monthly savings (₦)</th>
											 <th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>

		  <?php 
               $memmem = mysqli_query($conn, "SELECT * FROM memberz WHERE dele = 0 ORDER BY sname ASC");
                     $kan = 1;
          while ($row=mysqli_fetch_assoc($memmem)) {
                            $id1 =$row['id'];
                          //  $id2 = 'clinton'.$id1;
                          //  $hid1 = md5($id2);
                            $onames1 =$row['onames'];
                            $sname1 =$row['sname'];
                            $fully = $sname1.' '.$onames1;
                            $pix1 =$row['pix'];
                            $staffid1 =$row['staffid'];
                            $msave1 =$row['msave'];
                           // $editm = 'editmem.php?id='.$id1.'&hid='.$hid1;
            
            ?>  
										<tr>
											<td><?php echo $kan; ?></td>
											<td><?php echo $staffid1; ?></td>
											<td>
												<h2 class="table-avatar">
													<a href="#" class="avatar"><img alt="" src="memb/<?php echo $pix1; ?>"></a>
													<a href="#"><?php echo $fully; ?></a>
												</h2>
											</td>
											
											<td><?php echo $msave1; ?></td>
											 
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
													 <a class="dropdown-item" data-toggle="modal" data-target="#edsave<?php echo $id1;?>"  href=""><i class="fa fa-pencil m-r-5"></i> Edit monthly savings for <?php echo $fully; ?></a>
														 
													</div>
												</div>
											</td>
										</tr>

											<!-- Add Role Modal -->
				<div id="edsave<?php echo $id1;?>" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Change amount <?php echo $sname1; ?> saves monthly</h5>
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