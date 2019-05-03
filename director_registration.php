
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
	<h3 class="text-white text-center">Director Registration & Login info</h3>
	<div class="container c">
	<form class= m-auto b" method="post" enctype="multipart/form-data" action="dir_registration_data.php">
	<div class="col-lg-12 col-md-12 row">
	<div class="col-lg-6 col-md-6">
<div class="page-header">
	<h2 class="text-danger">Director Registration info</h2>
</div>
	<div class="form-group">
	<label>Full Name:</label><br>
	<input type="text" name="fname" class="form-control" required>
	</div>
	<div class="form-group">
     <label>email:</label><br>
      <input id="email" type="email" class="form-control" name="email">
    </div>
	<div class="form-group">
	<label>Mobile:</label><br>
	<input type="number" name="mob" class="form-control" required>
	</div>
	<div class="form-group">
	<label>Address:</label><br>
	<input type="textarea" name="add" class="form-control" required>
	</div>
	<div class="input-group">
	<label>Postal pin:</label><br>
	<input type="textarea" name="pin" class="form-control" required>
	</div>
	<div class="form-group">
	<label>Gender:</label><br>
	<input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="female">Female
	</div>
	<div class="form-group">
	<label>Photo:</label><br>
	<input type="file" name="photo" class="form-control" required>
	</div>
	</div>
	<div class="col-lg-6 col-md-6">
	<div class="page-header">
<h2 class="text-danger">Director Login Info</h2>
	</div>
	<div class="form-group">
	<label>User Name:</label><br>
	<input type="text" name="uname" class="form-control" required>
	</div>
	<div class="form-group">
	<label>Password:</label><br>
	<input type="password" name="pass" class="form-control" required>
	</div>
	<div class="form-group">
	<label>Conform password:</label><br>
	<input type="password" name="pass2" class="form-control" required>
	</div>
	<div class="form-group">
	 <label for="sel1">Security_Question:</label>
      <select class="form-control" id="sel1" name="s1">
        <option>What is your favourite pets name?</option>
        <option>What is your favourite food name?</option>
        <option>What is your favourite book name?</option>
        <option>What is your nick name?</option>
      </select>
  </div>
	<div class="form-group">
	<label>Security_answer:</label><br>
	<input type="text" name="sa" class="form-control" required>
	</div>
	</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row">
	<button type="submit" name="submit" class="btn btn-primary" style="margin-top: 50px; margin-left:500px; margin-bottom: 30px;">SignUp</button>    
	</div>
	</div>
</form>
    
</div>

</body>
</html>
<?php
// Footer Area
include ("footer.php");
?>

