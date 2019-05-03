<?php
$con=mysqli_connect('localhost','root','','oamis');

	//echo "success";
	$rmcid=$_POST['rmc_id'];
	$q="select * from rmc_creates_info where location_id=$rmcid";
	$result=mysqli_query($con,$q);
$opt="<option >Select RMC Name</option>";

	while ($rows=mysqli_fetch_array($result)) 
	{
$opt .="<option value=$rows[0]> $rows[3]</option>";
 
	
	
	}
	echo $opt;
?>