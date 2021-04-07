<?php require_once("cann.php");
      require_once("sexx.php"); 

  $memmem = mysqli_query($conn, "SELECT * FROM memberz WHERE dob = '2022-02-22'");
   $kanta = mysqli_num_rows($memmem);

  
        
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
        <title>Birthday for today and this month</title>
		
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
			  
              <?php require_once('siderd.php');?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Birthday Today <?php echo $tdate; ?></h3>
								 
							</div>
							 
						</div>
					</div>
					<!-- /Page Header -->
				 	
					<div class="row staff-grid-row">
						

		  <?php 
               $memmem = mysqli_query($conn, "SELECT * FROM memberz WHERE dele = 0 ORDER BY sname ASC");
                     
          while ($row=mysqli_fetch_assoc($memmem)) {
                            $idx =$row['id'];
                            $idx2 = 'clinton'.$idx;
                            $hidx = md5($idx2);
                            $onamesx =$row['onames'];
                            $snamex =$row['sname'];
                            $fullyp = $snamex.' '.$onamesx;
                            $pixx =$row['pix'];
                             $deptx =$row['dept'];
                            $activ1 =$row['activ'];
                       $editm = 'editmem.php?id='.$id1.'&hid='.$hid1;
            
            ?>  
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="#" class="avatar"><img alt="" src="memb/<?php echo $pixx;?>"></a>
								</div>
								 
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html"><?php echo $fullyp; ?></a></h4>
								<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html"><?php echo $deptx; ?></a></h5>
								 
							</div>
						</div>
			<?php } ?>
 
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
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>