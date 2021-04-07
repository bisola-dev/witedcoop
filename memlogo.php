<?php require_once("cann.php");
      require_once("sexx2.php"); 

// 87e25944099a7715a8350f1bf1851107
 $redi = 'memlogo.php';
 
 if (isset($_POST['clickin'])){
    
   $staffid = mysqli_real_escape_string($conn, strip_tags($_POST['staffid']));
   $titl = mysqli_real_escape_string($conn, strip_tags($_POST['titl']));
   $djoin = mysqli_real_escape_string($conn, strip_tags($_POST['djoin']));
   $sname = mysqli_real_escape_string($conn, strip_tags($_POST['sname']));
   $onames = mysqli_real_escape_string($conn, strip_tags($_POST['onames']));
   $fon = mysqli_real_escape_string($conn, strip_tags($_POST['fon']));
   $dept = mysqli_real_escape_string($conn, strip_tags($_POST['dept']));
   $rank = mysqli_real_escape_string($conn, strip_tags($_POST['rank']));
   $level = mysqli_real_escape_string($conn, strip_tags($_POST['level']));
   $dob = mysqli_real_escape_string($conn, strip_tags($_POST['dob']));
  
  if($titl == "" || $djoin == "" || $sname == "" || $onames == "" ||$fon== "" ||$level == "" || $dept == "" || $rank == "" ||$dob == "") {
 
 echo '<script type ="text/javascript">alert("please do not submit empty form."")</script>';}
 
    else{

   $mysqlu = mysqli_query($conn, "UPDATE memberz SET staffid = '$staffid', sname = '$sname', onames = '$onames', dob = '$dob', fon = '$fon', dept = '$dept', rank = '$rank', level = $level, titl = '$titl', djoin = '$djoin' WHERE id = $idm"); 
            
  echo'<script type="text/javascript"> 
    alert("Profile successfully updated. Thank you.");
      </script>';

        header("Location:$delec"); 
   }



}


//reset password
if (isset($_POST['resetp'])){
  $mysqlu2 = mysqli_query($conn, "UPDATE memberz SET hpazz = '87e25944099a7715a8350f1bf1851107' WHERE id = $idm"); 
            
  echo'<script type="text/javascript"> 
    alert("Password successfully reset to PASSWORD. Thank you.");
      </script>';
   }


//delete account
if (isset($_POST['delet'])){
  $mysqlu2 = mysqli_query($conn, "UPDATE memberz SET dele = 1 WHERE id = $idm"); 
            
  echo'<script type="text/javascript"> 
    alert("Account deleted successfully. Thank you.");
      </script>';
   }



// pic 

 //if register button is clicked
if (isset($_POST['submit']) || !empty($_FILES["foto"]["name"])) {
  
  $targetDir = "memb/";
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

      $insert= mysqli_query($conn, "UPDATE memberz SET pix = '$fileName' WHERE id = $id1");
 
     
      echo '<script type="text/javascript">
       alert("Passport uploaded successfully.")
       window.location.href="'.$redi.'";
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
        <title>Upload Passport</title>
		
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
			<!-- /Header -->
			
			<!-- Sidebar -->
              <?php require_once('siderd2.php');?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Upload or replace passport.</h3>

						 <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="#" class="avatar"><img src="memb/<?php echo $pix1;?>" alt=""></a>
								</div>
								<div class="profile-action2">
									 
									 
								</div>
						 <h4 class="user-name m-t-10 mb-0 text-ellipsis"> <?php echo $fully;?></h4>
								 
							</div>
						</div>

							 </div>

							<div class="col-auto float-right ml-auto">
								 
								<a href="#" class="btn btn-info" data-toggle="modal" data-target="#upp"><i class="fa fa-user"></i> Upload passport</a>
								 
							 
							</div>


						</div>
					</div>
					<!-- /Page Header -->
	 

					<!-- Add Role Modal -->
				<div id="upp" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Upload or replace passport photograph</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" action="" enctype="multipart/form-data">
									<div class="form-group">
									 <label>Select passport (png, jpg or jpeg format allowed) <span class="text-danger">*</span></label>
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