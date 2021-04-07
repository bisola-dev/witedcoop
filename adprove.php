<?php require_once("cann.php");
      require_once("sexx.php");

    $ide = mysqli_real_escape_string($conn, strip_tags($_GET['ide']));
    $yidh = mysqli_real_escape_string($conn, strip_tags($_GET['yidh']));

     $yid2 = 'clinton'.$ide;
     $yidh2 = md5($yid2);

       if ($yidh2 != $yidh){header("Location:logout.php");}

   $cos = mysqli_query($conn,"SELECT * FROM loanrec WHERE id = $ide");
                   while ($row=mysqli_fetch_assoc($cos)) {
                       $benefmail2 = $row['benefmail'];
                     }

     $redi = 'pendad.php';

     $mysqlu = mysqli_query($conn, "UPDATE loanrec SET approvdate = '$date_reg', aktivate = 1 WHERE id = $ide"); 
     
       $to = $benefmail2;
        $subject = "Admin approval successful | ".$coopname;
        $message = "Dear Cooperator, congratulations, Admin has approved your loan. Thanks";
        $from = "noreply@wited.org";
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);



        echo '<script type="text/javascript">
       alert("You have successfully approved the loan. The monthly loan repayment has been added to the template for next deduction. Back to loan approval request page.")
       window.location.href="'.$redi.'";
        </script>';  
?>