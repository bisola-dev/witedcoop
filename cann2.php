<?php
 
// online connection
 $servername="amclintcom.ipagemysql.com";
  $username="kiki";
  $password="12SkanYaba@#";
  $dbname="witeds";
 
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$db= mysqli_select_db($conn, $dbname);

session_start();
 //Global variable for date
date_default_timezone_set('Africa/Lagos');
$date_reg= date('M j, Y h:i a', time());
$tstamp= time(); 
$todayfull = date('Y-m-d');
$tomonth = date('m-d');
$tdate= date('M j, Y', time());

?>
