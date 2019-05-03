<?php
header('location:traders_licence.php');
session_start();
if(isset($_POST['submit']))
{
	$turnover=$_POST['annual'];
	$mid=$_SESSION['mid'];
	
	$photo=$_FILES["auditphoto"]["name"];
	$a_name="images/audit_bal_sheet/".$photo;
	move_uploaded_file($_FILES["auditphoto"]["tmp_name"],$a_name);

	$incomephoto=$_FILES["incomecert"]["name"];
	$b_name="images/income_cert/".$photo;
	move_uploaded_file($_FILES["incomecert"]["tmp_name"],$b_name);
	
	$texphoto=$_FILES["itreturn"]["name"];
	$c_name="images/it_return/".$photo;
	move_uploaded_file($_FILES["itreturn"]["tmp_name"],$c_name);

	$panphoto=$_FILES["pancard"]["name"];
	$d_name="images/pan_card/".$photo;
	move_uploaded_file($_FILES["pancard"]["tmp_name"],$d_name);
	
	$con=mysqli_connect("localhost","root","","oamis");
	
	$ins1="INSERT INTO `traders_licence_info`( `m_id`, `annual_income`, `audit_bal_sheet`, `income_cert`, `it_return`, `pan_card`,`status`) VALUES ('$mid','$turnover','$photo','$incomephoto','$texphoto','$panphoto',0)";
	echo "Inserted Successful";

		$status1=mysqli_query($con,$ins1);

	
		
	
	
}
?>
