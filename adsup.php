<?php require_once("cann.php");
      require_once("sexx.php"); 

      $ide = mysqli_real_escape_string($conn, strip_tags($_GET['id']));
    $yidh = mysqli_real_escape_string($conn, strip_tags($_GET['hid']));

     $yid2 = 'clinton'.$ide;  
     $yidh2 = md5($yid2);

     if ($yidh2 != $yidh){header("Location:logout.php");}

    $resuv = mysqli_query($conn, "SELECT * FROM memberz WHERE id = $ide");
                while ($row=mysqli_fetch_assoc($resuv)) {
                            $onamesx =$row['onames'];
                            $snamex =$row['sname'];
                            $fullx = $snamex.' '.$onamesx;
                            $admesx =$row['admsg'];
                            $admesx2 = $admesx + 1;
                              // $pixx =$row['pix'];
                          //  $deptx =$row['dept'];
                        }
                           


    $mysqlex = mysqli_query($conn, "UPDATE memberz SET msg = 0 WHERE id = $ide");

   if (isset($_POST['seev']) || !empty($_POST['fmsg'])) {

       $fmsg2 = mysqli_real_escape_string($conn, strip_tags($_POST['fmsg']));
     
    $mysqlu = mysqli_query($conn, "INSERT INTO supot (fid, flame, fmsg, fdate, tid, tlame) 
    	VALUES (0, 'Admin', '$fmsg2', '$date_reg', $ide, '$fullx')"); 

    $mysqlum = mysqli_query($conn, "UPDATE memberz SET admsg = $admesx2 WHERE id = $ide");

      echo '<script type="text/javascript">
       alert("Message sent to customer successfully.")
         </script>'; 
    }


//if register button is clicked
if (isset($_POST['submit']) || !empty($_FILES["foto"]["name"])) {
   
  $targetDir = "supot/";
  $fileName = basename($_FILES["foto"]["name"]);
  $fileName = $tstamp.$fileName;
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


  //$allowTypes = array('jpg','png','jpeg','gif');
  // Allow certain file formats
$allowTypes = array('jpg','png','jpeg');
 if (!in_array($fileType, $allowTypes)){
      echo '<script type="text/javascript">
        alert("Incorrect file format.Sorry only jpeg, jpg and png files are allowed");
        </script>'; } 

                   // Check file size
  else if ($_FILES["foto"]["size"] > 600000) {
               echo '<script type="text/javascript">
                alert("Sorry, your image is too large. Must be maximum of 600KB in size")
                </script>';
            }

    else { 
      $shee =  move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFilePath);

      $mysqlu = mysqli_query($conn, "INSERT INTO supot (fid, flame, fmsg, fdate, tid, tlame, natu) 
    	VALUES (0, 'Admin', '$fileName', '$date_reg', $ide, 'Admin', 2)"); 

    $mysqlum = mysqli_query($conn, "UPDATE memberz SET admsg = $admesx2 WHERE id = $ide");

      echo '<script type="text/javascript">
       alert("Image upload to customer successful.")
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
        <title>Admin support thread <?php echo $fullx; ?></title>
		
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
		
			 	<!-- Header -->
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
								<h3 class="page-title">Admin support :: <?php echo $fullx; ?></h3>
								 
							</div>
							 
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-12 col-xl-12">
							
<?php  $resultt = mysqli_query($conn, "SELECT * FROM supot WHERE (fid = $ide OR tid = $ide) AND dele = 0");
                      while ($row=mysqli_fetch_assoc($resultt)) {
                            
                            $fidx =$row['fid'];
                             $fmsgx =$row['fmsg'];
                            $flamex =$row['flame'];
                               $natux =$row['natu'];
                            $fdatex =$row['fdate'];
                            
                  if ($fidx != 0){$mesl = $flamex;}
                  else {$mesl = 'Admin';}


          if ($natux == 1) {
                  $cele = '<p>'.$fmsgx.'</p>';   }

          else if ($natux == 2) {
                                  $cele ='<div class="row">
										  <div class="uploaded-box">
												<div class="uploaded-img">
													<img width="500px" src="supot/'.$fmsgx.'" class="img-fluid" alt="">
												</div>
										 </div>
								 </div>';
					     }
 
               ?>
							<div class="card">
								<div class="card-body">
									<div class="project-title">
										<h4 class="card-title"><?php echo $mesl; ?></h4>
										<h6 class="block text-ellipsis m-b-15"><span class="text-xs"><?php echo $fdatex; ?></span> </h6>
									</div>
									
									<?php echo $cele; ?>
								 
								</div>
							</div>
		   <?php } ?> 
								<div class="col-auto float-right ml-auto">
								<a href="#" type="button" class="btn btn-success" data-toggle="modal" data-target="#msg"><i class="fa fa-envelope"></i> Send message</a> 
								<a href="#" class="btn btn-info" data-toggle="modal" data-target="#upp"><i class="fa fa-book"></i> Upload image</a>
			                    </div>


			                    							<!-- Add Role Modal -->
				<div id="msg" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Send message to <?php echo $fullx ?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="">
									<div class="form-group">
									 <label>Compose message</label>
									   <div class="col-md-10">
											 <textarea name="fmsg" rows="5" cols="5" class="form-control" placeholder="Enter text here" required></textarea>
									   </div> 
									   
									</div>
									<div class="submit-section">
										<button  type="submit" name="seev" class="btn btn-info submit-btn">Send</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>


				<!-- Add Role Modal -->
				<div id="upp" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Upload image file</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="" enctype="multipart/form-data">
									<div class="form-group">
									 <label>Select (png, jpg or jpeg format allowed) <span class="text-danger">*</span></label>
										<input name="foto" class="form-control" type="file" required>
									</div>
									 <div class="submit-section">
										<button  type="submit" name="submit" class="btn btn-info submit-btn">Upload now</button>
									</div>
								</form>
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
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Task JS -->
		<script src="assets/js/task.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>

</html>