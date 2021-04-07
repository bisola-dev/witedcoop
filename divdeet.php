<?php require_once("cann.php");
 


$id1=($_GET['id']);



$query13a = mysqli_query($conn, "SELECT * FROM divtable WHERE id=$id1");
$num_rows5 = mysqli_num_rows($query13a);
if ($num_rows5!= 1){ 
echo $mindcheck34 = "<script type ='text/javascript'>
                      alert('Sorry this dividends details does not exist');
                      window.location.href='viewdiv.php';
                         </script>";           
}


if(isset($_POST["Import"])){
	 
	     $id1 = trim(strip_tags($_POST['id']));
	 	 $filename=$_FILES["file"]["tmp_name"];

	 	 //$redirek = 'viewdiv.php?cosid='.$id1;
	 
	  if($_FILES["file"]["size"] > 0)
		 {

		 	$file = fopen($filename, "r");
		 	$counta = 0;
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	         	if($counta > 0) {  
	    		//	   $rere = rand_chars("abcdefghijk", 1);
	          //It wiil insert a row to our subject table from our csv file`
	          $result = mysqli_query($conn, "INSERT into divdetails (`divid`, `emal`, `amount`) 
	       values($id1, '$emapData[1]', '$emapData[2]')");
	         //we are using mysql_query function. it returns a resource on true else False on error
	            
	      
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
						 </script>";

						header("Location:divdeet.php");
				}
			}

	       $counta++;  }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	        echo '<script type="text/javascript">
        alert("File successfully uploaded.");
        window.location.href="viewdiv.php";
        </script>';
	          //close of connection
			mysqli_close($conn); 
				
		 	
			
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
								<h3 class="page-title">View dividends</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboardad.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Leads</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					    <form class="col-sm-6" action="" method="post" name="upload_excel" enctype="multipart/form-data">
             <input type="hidden" name="id" value="<?php echo $id1;?>">
                              <div class="form-group">
                    <label>Select CSV/Excel file of topics <a href="reed.csv" download>
                              <i class="fa fa-list"></i> Download Sample CSV</a> Download Sample CSV of Topic Upload</a></label>
         <input type="file" name="file" id="file">
                              </div>
                        
                         <button type="submit" id="submit" name="Import" class="btn btn-success">
                         Import csv file now
                       </button>
                             
                           </form>
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
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>

</html>