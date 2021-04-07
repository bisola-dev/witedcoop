<?php require_once("cann.php");
      require_once("sexx2.php"); 

    $mysqlex = mysqli_query($conn, "UPDATE memberz SET admsg = 0 WHERE id = $id1");

   if (isset($_POST['seev']) || !empty($_POST['fmsg'])) {

       $fmsg2 = mysqli_real_escape_string($conn, strip_tags($_POST['fmsg']));
     
    $mysqlu = mysqli_query($conn, "INSERT INTO supot (fid, flame, fmsg, fdate, tid, tlame) 
      VALUES ($id1, '$fully', '$fmsg2', '$date_reg', 0, 'Admin')"); 

    $mysqlum = mysqli_query($conn, "UPDATE memberz SET msg = $messi WHERE id = $id1");

      echo '<script type="text/javascript">
       alert("Message sent to admin successfully.")
       window.location.href="'.$redi.'";
        </script>'; 
    }

?>