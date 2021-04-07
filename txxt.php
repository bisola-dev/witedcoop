<?php require_once("cann.php");
      require_once("sexx2.php"); 

 // count the number of payments made before loading this page for form application;

$acctx = mysqli_query($conn, "SELECT * FROM formpay WHERE mymal = '{$mymalx}'");    
$sure = mysqli_num_rows($acctx);

$accty = mysqli_query($conn, "SELECT * FROM loanrec WHERE benefmail = '{$mymalx}'");    
    $sure2 = mysqli_num_rows($accty);

   if ($sure == $sure2){header("Location:payform.php");}

$redi = '';

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

      $getty = mysqli_query($conn, "INSERT INTO loanrec (lonid, benefmail, loaname, amuntt, periodd, interestt, totalpayment, monthpay, dateapply, payslip, guaranto1, guaranto2, guaranto3) 


        VALUES ($lid, '$mymalx', '$ln', $amunt, $pd,  $interest, $totalpay,
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