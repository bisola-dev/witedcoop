<?php
session_start();
                                                                                                         
  $servername="localhost";
  $username="root";
  $password="temitope";
  $dbname="witeds";
  


$conn = new mysqli($servername, $username, $password, $dbname); 

  // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$db= mysqli_select_db($conn, $dbname);


 //Global variable for date
date_default_timezone_set('Africa/Lagos');

$tstamp= time(); 
$todayfull = date('Y-m-d');
$tomonth = date('m-d');
$tdate= date('M j, Y', time());
$dreg=date('M j, Y h:i a', time());

  $resuk = mysqli_query($conn, "SELECT * FROM basik WHERE id = 1");
       while($get_info = mysqli_fetch_assoc($resuk)){ // Start looping table row 
                                         $cname = $get_info['cname'];
                                         $cmal = $get_info['cmal'];
                                         $cfon = $get_info['cfon'];
                                         $addy = $get_info['addy'];
                                         $logoz = $get_info['logoz'];
                                         
                                       
               }      
?>
