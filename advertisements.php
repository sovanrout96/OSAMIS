<?php
include_once("admin_navbar.php");
?>
<style>
		.c{
			border:2px solid black;
			background-color: orange;
		}

	</style>
<body style="background-color: teal;">
<div class="container c">
<form method="post" action="advertisements.php" class="col-lg-6">
	<div class="page-header">
		<h3>Upload Recent News & Advertisements</h3>		
	</div>
	<div class="form-group">
		<label for="fileno" class=" control-label">File No.</label>
		
			<input type="text" class="form-control" name="fileno" id="file" required>	
	</div>
	<div class="form-group">
		<label for="news" class=" control-label">News</label>
		  <textarea class="form-control" rows="5" id="news" name="news" placeholder="Upload recent News" required></textarea>
	</div>
	<div class="form-group">
		<label for="date" class=" control-label">Date</label>
		
			<input type="date" class="form-control" name="date" id="date" required>	
	</div>
	<div class="form-group">
<div class=" col-lg-6 col-sm-10">
<button type="submit" name="submit" class="btn btn-primary" >Upload</button>
</div>
</div>
</form>
</div>
</body>

<?php

if(isset($_POST['submit']))
{
$con=mysqli_connect("localhost","root","","oamis");
$file=$_POST['fileno'];
$news=$_POST['news'];
$date=$_POST['date'];
$q="INSERT INTO `news`( `file_no`, `news`, `date`) VALUES ('$file','$news','$date')";
mysqli_query($con,$q);
}
?>