<?php
$con=mysqli_connect('localhost','root','','oamis');
$id=$_GET['id'];
$q="DELETE FROM `item_detail` WHERE item_name='$id'";
mysqli_query($con,$q);
header('location:item_display.php');
?>