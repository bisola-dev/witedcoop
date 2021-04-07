<?php require_once("cann.php");
   //  require_once("settings.php");
   
    if (isset($_POST['savemin']) || !empty($_POST['emal']) || !empty($_POST['pwd'])) {

       $uzer = mysqli_real_escape_string($conn, strip_tags($_POST['emal']));
       $pazz = mysqli_real_escape_string($conn, strip_tags($_POST['pwd']));  

       $aa = 'Coop'.$uzer;
       $hlame2 = md5($aa); 

       $bb = 'CODED'.$pazz;
       $hpazz2 = md5($bb); 

     
    $acct = mysqli_query($conn, "SELECT * FROM adminlogin WHERE hlame = '{$hlame2}' AND hpazz = '{$hpazz2}'");
                     $sure = mysqli_num_rows($acct);
                     $redi = 'dashboardad.php';
                              
                                           
            if($uzer == "" || $pazz == "") //Be sure that all the fields are filled then proceed
    {
      echo '<script type="text/javascript">
        alert("You have to fill in ALL the fields to proceed.");
                 </script>';
    }
    
   else if ($sure == 0) { echo '<script type="text/javascript">
        alert("The login details provided are not correct. Please retry.");
        </script>'; }
            
    else if ($sure == 1 ) {
    
            $result2=mysqli_query($conn, "INSERT INTO logz (mymal, typee, dreg) VALUES (
              '$uzer', 'logged_in', '{$dreg}')") or die("Insert Error: ".mysqli_error());
             
  //    echo 'DEBE';              
            //session variables
                $hmal =$_SESSION['hmal'] = $hlame2;
                $mymal =$_SESSION['mymal'] = $uzer;
                $coopname =$_SESSION['coop'] = 'WITED Yabatech Cooperative';

         echo '<script type="text/javascript">
       alert("Your login details were correct. Please proceed to the home page.")
       window.location.href="'.$redi.'";
        </script>';  }
        
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
        <title>Login - WITED Cooperative Admin</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				 
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.php"><img src="imgg/<?php echo $logoz;?>"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle"><?php echo $cname; ?> | Admin</p>
							
							<!-- Account Form -->
							<form action="" method="post">
								<div class="form-group">
									<label>Email Address</label>
									<input class="form-control" type="email" name="emal" required>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
										 
									</div>
									<input class="form-control" maxlength="12" minlength="6" type="password" name="pwd" required>
								</div>
								<div class="form-group text-center">
									<button name="savemin" class="btn btn-primary account-btn" type="submit">Login</button>
								</div>
								<div class="account-footer">
									<p>Can't remember your password? <a href="#">Forgot password</a></p>
								</div>
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/orange/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 11:59:27 GMT -->
</html>