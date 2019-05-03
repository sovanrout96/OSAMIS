<?php
include_once("dbcon.php");
header('location:rmc_creation.php');
$distid=$_POST['dist'];
$rmcname=$_POST['name'];
$location=$_POST['location'];
$member=$_POST['member'];
$q="INSERT INTO `rmc_creates_info`( `district_id`,  `rmc_name`,`Location_id`, `member`) VALUES  ('$distid','$location','$rmcname','$member')";
$query=mysqli_query($con,$q);
?>