<?php
if(isset($_POST['submit']))
{
session_start();
// include ("dbcon.php");
$con=mysqli_connect('localhost','root','','oamis');
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$q="select  p.m_id,district_id,myc_id,rmc_id from myc_registration_info p inner join myc_login_info l on p.m_id=l.m_id where user_name = '$uname' && password='$pass' && status=1";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if($num==1){
$r=mysqli_fetch_array($query);
	$_SESSION['username']=$uname;
	$_SESSION['district']=$r[1];
	$_SESSION['myc']=$r[2];
	$_SESSION['rmc']=$r[3];
	header('location:myc.php');

}
else{
	header('location:myc_login.php');
}


}
?>