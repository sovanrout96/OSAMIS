<?php
include_once('rmc_navbar.php');
if(isset($_POST['submit'])){
	$con=mysqli_connect('localhost','root','','oamis');
	$check=$_POST['ck'];
	$checkbox=implode(',',$check);
	$sel="update `traders_login_info` set `status`=1 where m_id in ($checkbox)";
	$result=mysqli_query($con,$sel);
if($result){
	echo "update success fully";
}
else{
	echo "sorry";
}
}
?>