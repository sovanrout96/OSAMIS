
<?php
// Carosole Area
include ("navbar.php");


// Body Area
?>
<!DOCTYPE html>
<html>
<head>
	<title>jquery form</title>
	<script src="js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		.c{
			border:2px solid black;
			background-color: orange;
		}

	</style>

</head>
<body style="background-color: teal;">
	<div class="container c">
	<div class="login-box">
		<form class="col-lg-12  m-auto b" method="post" action="traders_login_data.php">
			<h2 class="text-danger page-header">Traders Login page</h2>
				<div class="form-group">
					<label>User Name:</label><br>
					<input type="text" name="uname" required>
				</div>
				<div class="form-group">
					<label>Password:</label><br>
					<input type="password" name="pass" required>
				</div>
				<div class="form-group">
					<input type="checkbox">Remember me !!!
				</div>
				<button type="submit" name="submit" class="btn btn-success" >Login</button>
		</form>
	</div>
</div>	

<?php
// Footer Area
include ("footer.php");
?>

