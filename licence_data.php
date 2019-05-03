<?php
session_start();
$con=mysqli_connect('localhost','root','','oamis');
if(isset($_POST['lsubmit'])){
	$licence=$_POST['number'];
	$issued=$_POST['issued'];
	$valid=$_POST['valid'];
	$id=$_SESSION['id'];
	$_SESSION['valid']=$_POST['valid'];

	$q="INSERT INTO `trad_licence_no_info`( `m_id`, `licence_no`, `issued_on`, `valid_upto`) VALUES ($id,'$licence','$issued','$valid')";
	$run=mysqli_query($con,$q);

	$sel="update `traders_licence_info` set `status`=1 where `m_id`=$id";
	$run1=mysqli_query($con,$sel);
	header('location:licence_show.php');
}
?>