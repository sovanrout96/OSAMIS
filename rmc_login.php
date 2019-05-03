
<?php
include_once("navbar.php");
?>

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
		<form class="col-lg-12  m-auto b" method="post" action="rmc_login_data.php">
			<h2 class="text-danger page-header">RMC Login page</h2>
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
