<?php
if(isset($_POST['submit']))
{
session_start();
// include ("dbcon.php");
$con=mysqli_connect('localhost','root','','oamis');
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$q="select * from traders_login_info where user_name = '$uname' && password='$pass' && status='1' ";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if($num==1){
	$r=mysqli_fetch_array($query);
	$_SESSION['tusername']=$uname;
	$_SESSION['mid']=$r[1];
	header('location:traders.php');
}
else{
	header('location:traders_login.php');
}
}
?>