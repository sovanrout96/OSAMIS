<?php
header('location:traders_login.php');
if(isset($_POST['submit']))
{

	$dist=$_POST['dist'];
	$rmcname=$_POST['rmcname'];
	$mycname=$_POST['mycnameid'];
	$name=$_POST["fname"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$address=$_POST["address"];
	$pin=$_POST["pin"];
	$gender=$_POST["gender"];

	$photo=$_FILES["photo"]["name"];
	$f_name="traders_photo/".$photo;
	move_uploaded_file($_FILES["photo"]["tmp_name"],$f_name);
	$username=$_POST["uname"];
	$password=$_POST["pass1"];
	$security_question=$_POST["s1"];
	$security_answer=$_POST['sa'];

	
	$con=mysqli_connect("localhost","root","","oamis");
	$q="select * from traders_login_info where user_name = '$username' && password='$password'";
		$result=mysqli_query($con,$q);
		$num=mysqli_num_rows($result);
		if($num==1){
			echo "User name is allready exist";
		}
		else{
	$ins1="INSERT INTO `traders_registration_info`( `district_id`, `rmc_id`, `myc_id`, `name`, `email`, `phone`, `address`, `pin`, `photo`, `gender`) VALUES ('$dist','$rmcname','$mycname','$name','$email','$phone','$address','$pin','$photo','$gender')";
		$status1=mysqli_query($con,$ins1);

		$id=mysqli_insert_id($con);
	$ins2="INSERT INTO `traders_login_info`(`m_id`, `user_name`, `password`, `seq_question`, `answer`, `status`) VALUES ($id,'$username','$password','$security_question','$security_answer',0)";
		$status2=mysqli_query($con,$ins2);
		echo $ins1; echo "<br>";
		echo $ins2;
		}
	
	
}
?>
