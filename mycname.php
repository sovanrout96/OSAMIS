<?php
$con=mysqli_connect('localhost','root','','oamis');

	//echo "success";
	$rmcid=$_POST['rmc_id'];
	$q="select * from myc_creates_info where rmc_id=$rmcid";
	$result=mysqli_query($con,$q);
$opt="<option >Select MYC Name</option>";

	while ($rows=mysqli_fetch_array($result)) 
	{
$opt .="<option value=$rows[0]> $rows[4]</option>";
 
	
	
	}
	echo $opt;
?>