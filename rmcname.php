<?php
$con=mysqli_connect('localhost','root','','oamis');

	//echo "success";
	$distid=$_POST['dist_id'];
	$q="select * from rmc_creates_info where district_id=$distid";
	$result=mysqli_query($con,$q);
$opt="<option >Select RMC Name</option>";

	while ($rows=mysqli_fetch_array($result)) 
	{
$opt .="<option value=$rows[0]> $rows[3]</option>";
 
	
	
	}
	echo $opt;
?>