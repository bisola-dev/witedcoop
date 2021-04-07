<?php
                $hmal =$_SESSION['hmal'];
                $mymal =$_SESSION['mymal'];
                $coopname =$_SESSION['coop'];

     if ($mymal == ""){header("Location:logout.php");}

     $resultt = mysqli_query($conn, "SELECT * FROM adminlogin WHERE emal = '$mymal'");
      $komo = mysqli_num_rows($resultt);

    if ($komo != 1){header("Location:logout.php");}
                
             while($get_info = mysqli_fetch_assoc($resultt)){ // Start looping table row 
                                         $myfull = $get_info['fulln'];
                                         $myrole = $get_info['rolez'];
                                         $myhpazz = $get_info['hpazz'];
                                       
               }        

?>