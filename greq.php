<?php require_once("cann.php");
      require_once("sexx2.php");

if (isset($_POST['clacki'])){  
    $lodid2 = mysqli_real_escape_string($conn, $_POST["lodid"]);
    $gtype2 = mysqli_real_escape_string($conn, $_POST["gtype"]);
    $benef2 = mysqli_real_escape_string($conn, $_POST["benefmail"]);

    $cosha = mysqli_query($conn,"UPDATE loanrec SET $gtype2 = '$date_reg' WHERE id = $lodid2");

        $to = $benef2;
        $subject = "Guarantor Approval Successful | Yabatech Cooperative";
        $message = "Dear Cooperator, this is to inform you that ".$fully." has approved your loan as a guarantor. Thanks";
        $from = "noreply@yctcoop.org";
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);

     echo '<script type="text/javascript">
        alert("You have successfully approved the loan. Thanks.")
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
								<h3 class="page-title">Approve guarantor requests (Ensure you know the applicants before giving approval and standing in as a guarantor.)</h3>
								 
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
											<th>Applicant</th>
											<th>Loan details</th>
										 
											<th>Application date</th>
											<th>Details</th>
											 
										</tr>
									</thead>
									<tbody>

			  <?php 
                $memmem2 = mysqli_query($conn, "SELECT * FROM loanrec WHERE guaranto1 = '$mymalx' OR guaranto2 = '$mymalx' OR guaranto3 = '$mymalx'");
                    
                    $kan = 1;
                     while ($row=mysqli_fetch_assoc($memmem2)) {
                                      $lidid = $row['id'];
                                      $benefmail = $row['benefmail'];
                                      $loaname = $row['loaname'];
                                      $amuntt = $row['amuntt'];
                                      $periodd = $row['periodd'];
                                      $interestt = $row['interestt'];
                                      $totalpayment = $row['totalpayment'];
                                      $monthpay = $row['monthpay'];
                                      $dateapply = $row['dateapply'];
                                      $payslip = $row['payslip'];
                                      $guaranto1 = $row['guaranto1'];
                                      $guaranto1app = $row['guaranto1app'];
                                      $guaranto2 = $row['guaranto2'];
                                      $guaranto2app = $row['guaranto2app'];
                                      $guaranto3 = $row['guaranto3'];
                                      $guaranto3app = $row['guaranto3app'];
                                      $approvdate = $row['approvdate'];
                                      $aktivate = $row['aktivate'];
                                 

                        if ($mymalx == $guaranto1){$updee = 'guaranto1app'; $dappi = $guaranto1app;}
                      else  if ($mymalx == $guaranto2){$updee = 'guaranto2app'; $dappi = $guaranto2app;}
                      else {$updee = 'guaranto3app'; $dappi = $guaranto3app;}

               $perere = 'Applied for '.$loaname.' of ₦'.$amuntt.' to pay back for a period of '.$periodd.' month(s) with '.$interestt.'% interest';
          
                
             $popo = mysqli_query($conn, "SELECT * FROM memberz WHERE email = '$benefmail'");
                     while ($row=mysqli_fetch_assoc($popo)) {
                           $titl11 =$row['titl'];
                           $onames11=$row['onames'];
                           $sname11 =$row['sname'];
                           $fully1 = $titl11.' '.$sname11.' '.$onames11;
                           $pix11 =$row['pix'];

             ?>  
									 <tr>
											<td><?php echo $kan;?></td>
											<td><h2 class="table-avatar">
													<a href="#" class="avatar"><img alt="" src="memb/<?php echo $pix11; ?>"></a>
													<a href="#"><?php echo $fully1; ?></a>
												</h2>
												</td>
											<td><?php echo $perere; ?></td>
											  
											<td><?php echo $dateapply; ?></td>
									  <td> 
		<?php if (!empty($dappi)) {$disa = 'disabled'; $soro = 'Approval granted';} 
		else  {$disa = ''; $soro = 'Grant approval';}  ?>
						 <form action="" method="post">
							  <input type='hidden' name='benefmail' value='<?php echo $benefmail;?>'>
                              <input type='hidden' name='gtype' value='<?php echo $updee;?>'>
                               <input type='hidden' name='lodid' value='<?php echo $lidid;?>'>	 
								<div class="submit-section">
									<button type="submit" name="clacki"  onclick="return confirm('Are you sure you want to be a guarantor to this loan applicant?')"  class="btn btn-success submit-btn m-r-10" <?php echo $disa; ?>><?php echo $soro; ?></button>
									 
								</div>
							</form>
							<?php echo $dappi; ?>

									  </td>
								 </tr>
							<?php $kan++; }} ?>
										 
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