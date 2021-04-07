<?php require_once("cann.php");
      require_once("sexx2.php"); 

 // count the number of payments made before loading this page for form application;

$acctx = mysqli_query($conn, "SELECT * FROM formpay WHERE mymal = '{$mymalx}'");    
$sure = mysqli_num_rows($acctx);

$accty = mysqli_query($conn, "SELECT * FROM loanrec WHERE benefmail = '{$mymalx}'");    
    $sure2 = mysqli_num_rows($accty);

   if ($sure == $sure2){header("Location:payform.php");}

    $redi = 'lpend.php';

if (isset($_POST['clikloan'])){  
    $lid = mysqli_real_escape_string($conn, $_POST["lid"]);
    $amunt = mysqli_real_escape_string($conn, $_POST["amunt"]);
    $guaranty1 = mysqli_real_escape_string($conn, $_POST["guaranty1"]);
    $guaranty2 = mysqli_real_escape_string($conn, $_POST["guaranty2"]);
    $guaranty3 = mysqli_real_escape_string($conn, $_POST["guaranty3"]);

 
    $messi = 'Dear Cooperator, '.$fully.' applied for a loan and made you a guarantor. Please log on to the Cooperative App and give your consent for approval. Thanks.';

     $cosh = mysqli_query($conn,"SELECT * FROM loantbl WHERE id = $lid");
                  while ($row=mysqli_fetch_assoc($cosh)) {
                                      $ln = $row['loaname'];
                                      $pd = $row['perod'];
                                      $interest = $row['intresty'];

                             $rate = $interest/100;
                             $interesting = $amunt * $rate;
                             $totalpay = $amunt + $interesting;
                              $mthpay = $totalpay/$pd;
                              $mthlypay = ROUND ($mthpay, 2);

                       $upa =  $amunt * (100 + $interest);
                       $lowa =  $pd * 100;
                       $mthlypay = $upa/$lowa;

       }

 
    if($lid == ""|| $amunt == ""|| $guaranty1 == ""|| $guaranty2 == ""|| $guaranty3 == ""){
      echo "<script type ='text/javascript'>
            alert('please fill correctly')
            </script>";
         }
    
    else if($guaranty1 == $guaranty2 || $guaranty1 == $guaranty3 || $guaranty3 == $guaranty2){
      echo "<script type ='text/javascript'>
            alert('You have to select three different guarantors')
            </script>";
         }

 else {

         $targetDir = "loanslip/";
         $fileName = basename($_FILES["pays"]["name"]);
         $fileName = $tstamp.$fileName;
         $targetFilePath = $targetDir . $fileName;
         $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(empty($_FILES["pays"]["name"])){
   echo "<script type='text/javascript'>
        alert('please upload your current payslip');
          </script>";
  
 
} else if ($_FILES["pays"]["size"] > 1000000) {
    echo "<script type='text/javascript'>
        alert('Sorry, your file is too large, please reduce the size')
          </script>";
               
   }
   else if ($fileType != ('jpg' || 'png' || 'jpeg'||'pdf')) {
          echo "<script type='text/javascript'>
               alert('Invalid file type, only pdf, jpg and png files are allowed.')
               </script>";

  }

   else { if(move_uploaded_file($_FILES["pays"]["tmp_name"], $targetFilePath)){ 
        
      //  echo $date_reg;   

      $getty = mysqli_query($conn, "INSERT INTO loanrec (lonid, benefull, benefmail, loaname, amuntt, periodd, interestt, totalpayment, monthpay, dateapply, payslip, guaranto1, guaranto2, guaranto3) 


        VALUES ($lid, '$fully', '$mymalx', '$ln', $amunt, $pd,  $interest, $totalpay,
        '$mthlypay', '$date_reg', '$fileName', '$guaranty1','$guaranty2',
        '$guaranty3')");

     
        $to = $guaranty1;
        $subject = "Guarantor Consent | Name Cooperative";
        $message = $messi;
        $from = "noreply@yctcoop.org";
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);

         $to = $guaranty2;
        $subject = "Guarantor Consent | Name Cooperative";
        $message = $messi;
        $from = "noreply@yctcoop.org";
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);

         $to = $guaranty3;
        $subject = "Guarantor Consent | Name Cooperative";
        $message = $messi;
        $from = "noreply@yctcoop.org";
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);
        
         echo '<script type="text/javascript">
       alert("Loan Application Successful. Mail has been sent to your guarantors for approval after which the Cooperative Management will decide appropriately.")
           window.location.href="'.$redi.'";
        </script>'; 
        // window.location.href="'.$redi.'";
        
          }  
       }
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
        <title>Apply for loan</title>
		
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
		
		  <?php require_once('hedad2.php');?>
			<!-- /Header -->
			
			<!-- Sidebar -->
              <?php require_once('siderd2.php');?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Loan application form</h3>
								 
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Apply for loan. Fill the forms below appropriately</h4>
								</div>
								<div class="card-body">
									<form action="" method="post" enctype="multipart/form-data">
										
											<div class="form-group row">
											<label class="col-form-label col-md-2">Select one of the following loan types</label>
											<div class="col-md-10">

						  <?php 
                                     $cos = mysqli_query($conn,"SELECT * FROM loantbl WHERE dele = 0");
                                      while ($row=mysqli_fetch_assoc($cos)) {
                                      $yid = $row['id'];
                                      $cuss = $row['loaname'];
                                      $kuss = $row['perod'];
                                      $muss = $row['intresty'];
                                     ?>    
												<div class="radio">
													<label>
						   <input type="radio" value="<?php echo $yid;?>" name="lid" required> <?php echo $cuss.' :: Period of '.$kuss.' month(s) :: '.$muss.'% interest';?>
													</label>
												</div>
									  	<?php } ?>
												 
											</div>
										</div>
							

										<div class="form-group row">
											<label class="col-form-label col-md-2">Amount requested (₦) </label>
											<div class="col-md-10">
												<input type="number" name="amunt" class="form-control" required>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-md-2">Select first guarantor</label>
											<div class="col-md-10">
												<select class="form-control" name="guaranty1" required>
													<option value="">-- Select --</option>
													

													     <?php 
                                $shian = mysqli_query($conn,"SELECT * FROM memberz WHERE dele = 0 AND id !=$id1");
                                      while ($row=mysqli_fetch_assoc($shian)) {
                                      $yid = $row['id'];
                                      $emad1 = $row['email'];
                                      $titl1 = $row['titl'];
                                       $sur1 = $row['sname'];
                                      $odas1=  $row['onames'];
                                    $fully = $titl1.' '.$sur1.' '.$odas1;
                                      
                                     ?>
                                       <option value="<?php echo $emad1;?>"><?php echo $fully; ?></option>
                        <?php } ?>
													 
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-md-2">Select second guarantor</label>
											<div class="col-md-10">
												<select class="form-control" name="guaranty2" required>
													<option value="">-- Select --</option>
												 
													     <?php 
                                $shian2 = mysqli_query($conn,"SELECT * FROM memberz WHERE dele = 0 AND id !=$id1");
                                      while ($row=mysqli_fetch_assoc($shian2)) {
                                      $yid = $row['id'];
                                      $emad1 = $row['email'];
                                      $titl1 = $row['titl'];
                                       $sur1 = $row['sname'];
                                      $odas1=  $row['onames'];
                                    $fully = $titl1.' '.$sur1.' '.$odas1;
                                      
                                     ?>
                                       <option value="<?php echo $emad1;?>"><?php echo $fully; ?></option>
                        <?php } ?>
													 
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-md-2">Select third guarantor</label>
											<div class="col-md-10">
												<select class="form-control" name="guaranty3" required>
												 <option value="">-- Select --</option>
												 
													     <?php 
                                $shian3 = mysqli_query($conn,"SELECT * FROM memberz WHERE dele = 0 AND id !=$id1");
                                      while ($row=mysqli_fetch_assoc($shian3)) {
                                      $yid = $row['id'];
                                      $emad1 = $row['email'];
                                      $titl1 = $row['titl'];
                                       $sur1 = $row['sname'];
                                      $odas1=  $row['onames'];
                                    $fully = $titl1.' '.$sur1.' '.$odas1;
                                      
                                     ?>
                                       <option value="<?php echo $emad1;?>"><?php echo $fully; ?></option>
                        <?php } ?>
													 
												</select>
											</div>
										</div> 

										<div class="form-group row">
											<label class="col-form-label col-md-2">Upload current payslip </label>
											<div class="col-md-10">
												<input class="form-control" name="pays" type="file" required>
											</div>
										</div>

										 
									 	<div class="submit-section">
									<button type="submit" name="clikloan" class="btn btn-primary submit-btn m-r-10">Submit form</button>
									 
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

<!-- Mirrored from dreamguys.co.in/smarthr/orange/form-basic-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 11:59:42 GMT -->
</html>