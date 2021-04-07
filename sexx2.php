<?php
                $hmalx =$_SESSION['hmal'];
                $mymalx =$_SESSION['mymal'];
                $coopname =$_SESSION['coop'];

    if ($mymalx == ""){header("Location:logout2.php");}

     $resultt = mysqli_query($conn, "SELECT * FROM memberz WHERE hemail = '{$hmalx}'");
      $komo = mysqli_num_rows($resultt);

    if ($komo != 1){header("Location:logout2.php");}
                
        while ($row=mysqli_fetch_assoc($resultt)) {
                            $id1 =$row['id'];
                            $id2 = 'clinton'.$id1;
                            $hid1 = md5($id2);
                            $onames1 =$row['onames'];
                            $sname1 =$row['sname'];
                            $titl1 =$row['titl'];
                            $fully = $titl1.' '.$sname1.' '.$onames1;
                            $pix1 =$row['pix'];
                            $email1 =$row['email'];
                            $fon1 =$row['fon'];
                            $dept1 =$row['dept'];
                            $activ1 =$row['activ'];
                            $messi1 =$row['msg'];
                            $rank1 =$row['rank'];
                            $level1 =$row['level'];
                            $staffid1 =$row['staffid'];
                            $messi = $messi1 + 1; 
                            $admsg1 =$row['admsg'];

                            $djoin1 =$row['djoin'];
                             $dob1 =$row['dob'];
                    //   $editm = 'editmem.php?id='.$id1.'&hid='.$hid1;

                   }
            
?>