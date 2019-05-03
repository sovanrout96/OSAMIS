<?php
header("location:director_login.php");
if(isset($_POST['submit']))
{

	$name=$_POST["fname"];
	$email=$_POST["email"];
	$phone=$_POST["mob"];
	$address=$_POST["add"];
	$pin=$_POST["pin"];
	$gender=$_POST["gender"];
	$photo=$_FILES["photo"]["name"];
	$f_name="photo/".$photo;
	//$tmp= $_FILES["photo"]["size"];
	
	move_uploaded_file($_FILES["photo"]["tmp_name"],$f_name);
	$username=$_POST["uname"];
	$password=$_POST["pass"];
	$con_password=$_POST["pass2"];
	$security_question=$_POST["s1"];
	$security_answer=$_POST['sa'];
	
	$con=mysqli_connect("localhost","root","","oamis");
	if($con){
		echo "connection occure";
	}else{
		echo "Error!!!";
	}

	$q="select * from dir_login_info where user_name = '$username' && password='$password'";
		$result=mysqli_query($con,$q);
		$num=mysqli_num_rows($result);
		if($num==1){
			echo "User name is allready exist";
		}
		else{
	$ins1="INSERT INTO `dir_registration_info`(d_id, `full_name`, `email`, `phone`, `address`, `pin`, `gender`, `photo`) VALUES ('','$name','$email','$phone','$address',$pin,'$gender','$photo')";
		$status1=mysqli_query($con,$ins1);

		$id=mysqli_insert_id($con);
	$ins2="INSERT INTO `dir_login_info`( d_id, `user_name`, `password`, `seq_question`, `answer`,`status`) VALUES ($id,'$username','$password','$security_question','$security_answer',0)";
		$status2=mysqli_query($con,$ins2);
		echo $ins1; echo "<br>";
		echo $ins2;
		if($status1)
	{
		echo 'data inserted successfuly';

	}
		}
	
	
}
?>
