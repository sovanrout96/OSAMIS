<?php
if(isset($_POST['submit']))
{
session_start();
// include ("dbcon.php");
$con=mysqli_connect('localhost','root','','oamis');
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$q="select * from rmc_login_info where user_name = '$uname' && password='$pass' && status='1' ";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if($num==1){
	$_SESSION['username']=$uname;
	header('location:rmc.php');
}
else{
	header('location:rmc_login.php');
}
}
?>