<?php require_once("cann.php");
      require_once("sexx.php"); 

      $redi = 'managead.php';


      if (isset($_POST["clikloan"])){

      $fulln7 = mysqli_real_escape_string($conn, strip_tags($_POST['fulln'])); 
     $emal7 = mysqli_real_escape_string($conn, strip_tags($_POST['emal']));
     $fon7 =  mysqli_real_escape_string($conn, strip_tags($_POST['fon']));
     $rolez7 = mysqli_real_escape_string($conn, strip_tags($_POST['obta']));

    $acct = mysqli_query($conn, "SELECT * FROM adminlogin WHERE emal = '$emal7'");
                     $sure = mysqli_num_rows($acct);


 $amm = 'Coop'.$emal7;
 $hemail = md5($amm);

    if($fulln7 == "" || $emal7 == ""|| $fon7 == "" || $rolez7 == ""){

      echo "<script type ='text/javascript'>
            alert('please fill the form correctly')
            </script>";
        }

      else if($sure == 1){

      echo "<script type ='text/javascript'>
            alert('Admin account already exists. Thanks.')
            </script>";
         }
 
    else {       
        $insert1 = mysqli_query($conn, "INSERT INTO adminlogin (fulln, emal, fon, hpazz, rolez, regby, hlame) 
        VALUES ('$fulln7', '$emal7', '$fon7', '87e25944099a7715a8350f1bf1851107', '$rolez7', 
           	'$mymal', '$hemail')");
     
       echo "<script type='text/javascript'>
        alert('Admin account added successfully. Default admin password is PASSWORD');
        </script>"; 
        }

        
    }



//delete account
if (isset($_POST['delet'])){
  $ide1 = mysqli_real_escape_string($conn, strip_tags($_POST['ide'])); 
  $mysqlu2 = mysqli_query($conn, "UPDATE adminlogin SET status = 0 WHERE id = $ide1"); 
            
     echo '<script type="text/javascript">
       alert("Admin account deleted successfully. Thank you.")
       window.location.href="'.$redi.'";
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
        <title>Manage Admin</title>
		
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
								<h3 class="page-title">Manage admin accounts</h3>
								 

								<div class="col-auto float-right ml-auto">
								<a href="#" class="btn btn-success" data-toggle="modal" data-target="#lsq"><i class="fa fa-lock"></i> Add new Admin account</a>
							  </div>


							  <div id="lsq" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add new admin account</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="">
									<div class="form-group">
									 <label>Full name <span class="text-danger">*</span></label>
										<input name="fulln" class="form-control" type="text" required>
									</div>

									<div class="form-group">
									 <label>Email address <span class="text-danger">*</span></label>
										<input name="emal" class="form-control" type="email" required>
									</div>

									<div class="form-group">
									 <label>Phone number <span class="text-danger">*</span></label>
										<input name="fon" class="form-control" type="number" required>
									</div>

								  <div class="form-group">
									 <label>Role of admin<span class="text-danger">*</span></label>
									    	<select class="form-control" name="obta" required>
													<option value="">-- Select --</option>
													<option value="Superadmin">Superadmin :: Has all access to make critical changes.</option>
													<option value="Staff">Staff :: Does not have access to make critical changes.</option>
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
											<th>Email</th>
											<th>Phone no.</th>
											<th>Role</th>
											 <th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>

		  <?php 
               $memmem = mysqli_query($conn, "SELECT * FROM adminlogin WHERE status = 1 AND emal !='$mymal' ORDER BY fulln ASC");
                     $kan = 1;
          while ($row=mysqli_fetch_assoc($memmem)) {
                            $id1 =$row['id'];
                            $id2 = 'clinton'.$id1;
                            $hid1 = md5($id2);
                            $fulln9 =$row['fulln'];
                            $emal9 =$row['emal'];
                            $fon9 =$row['fon'];
                            $rolez9 =$row['rolez'];
                            
                        //   $editm = 'editmem.php?id='.$id1.'&hid='.$hid1;
            
            ?>  
										<tr>
											<td><?php echo $kan; ?></td>
											<td><?php echo $fulln9; ?></a>
											</td>
											<td><?php echo $emal9; ?></td>
											<td><?php echo $fon9; ?></td>
											<td><?php echo $rolez9; ?></a></td>
										 
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" data-toggle="modal" data-target="#delet<?php echo $id1;?>" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>

										<div id="delet<?php echo $id1;?>" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title"><?php echo $fulln9;?> will no longer be able to access admin dashboard if you proceed. Are you sure you want this admin account deleted?</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="" method="post">
									 <input name="ide" value="<?php echo $id1;?>" type="hidden">
									<div class="submit-section">
										 <button type="submit" name="delet" class="btn btn-danger submit-btn">Delete now</button>
										 
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