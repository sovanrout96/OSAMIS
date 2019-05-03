<?php
include_once("dbcon.php");
$distid=$_POST['dist'];
$rmcname=$_POST['rmcname'];
$location=$_POST['location'];
$mycname=$_POST['mycname'];
$q="INSERT INTO `myc_creates_info`( `district_id`, `location_id`, `rmc_id`, `myc_name`) VALUES ($distid,'$location','$rmcname','$mycname')";
$query=mysqli_query($con,$q);
header('location:myc_creation.php');
?>